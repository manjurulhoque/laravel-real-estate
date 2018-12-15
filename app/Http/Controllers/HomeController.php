<?php

namespace App\Http\Controllers;

use App\Mail\ContactOwner;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::where('is_featured', true)->get();
        return view('home', compact('properties'));
    }

    public function feed()
    {
        $feeds = Property::where('pending', true)->get();

        return view('feed', compact('feeds'));
    }

    public function filter(Request $request)
    {
        $properties = Property::where('pending', 1);

        if ($request->has('property_type') && $request->property_type != null) {
            $properties->where('type', '=', $request->property_type);
        }

        if ($request->has('city') && $request->city != null) {
            $properties->where('city', '=', $request->city);
        }

        if ($request->has('bedroom') && $request->bedroom != null) {
            $properties->where('bedrooms', '=', $request->bedroom);
        }

        if ($request->has('bathroom') && $request->bathroom != null) {
            $properties->where('bathrooms', '=', $request->bathroom);
        }

        if ($request->has('min_price') && $request->min_price != null && $request->has('max_price') && $request->max_price) {
            $properties->where('price', '>=', $request->min_price);
            $properties->where('price', '<=', $request->max_price);
        }

        $properties = $properties->get();

        //dd($properties);
        return view('filter', compact('properties'));
    }

    public function single($id)
    {
        $property = Property::find($id);

        return view('property-single', compact('property'));
    }

    public function contact_agent(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $comment = $request->comment;

        $owner_email = $request->owner_email;

        //dd($request->all());

        Mail::to($owner_email)->send(new ContactOwner($name, $email, $phone_number, $comment));

        return redirect()->back()->with('success', 'Email was sent!');
    }

    public function search(Request $request)
    {
        $type = $request->property;
        $offer = $request->offer;
        $city = $request->city;

        $properties = Property::where('type', 'LIKE', '%' . $type . '%')
            ->where('offer', 'LIKE', '%' . $offer . '%')
            ->where('city', 'LIKE', '%' . $city . '%')
            ->get();

        return view('search-results', compact('properties'));
    }
}
