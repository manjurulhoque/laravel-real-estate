<?php

namespace App\Http\Controllers;

use App\City;
use App\Photo;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function create()
    {
        $cities = City::all();
        $user = auth()->user();
        return view('agents.property.create', compact('user'), compact('cities'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'is_featured' => 'required',
            'all_images' => 'required',
            'all_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $property = new Property();
        $property->title = $request->title;
        $property->type = $request->type;
        $property->offer = $request->offer;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->space = $request->space;
        $property->total_room = $request->total_room;
        $property->city = $request->city;
        $property->area = $request->areas;
        $property->building_year = $request->building_year;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->parking = $request->parking;
        $property->date = $request->date;
        $property->address = $request->address;
        $property->is_air_condition = $request->is_air_condition == 'on' ? true : false;
        $property->user_id = auth()->user()->id;
        $property->contact = $request->contact;
        $property->save();

        if ($request->hasfile('all_images')) {
            foreach ($request->file('all_images') as $image) {
                $name = $image->getClientOriginalName();
                //$location = public_path('/images/uploads/' . $name);
                $image->move(public_path() . '/images/uploads/', $name);
                $photo = new Photo();
                $photo->property_id = $property->id;
                $photo->location = $name;
                $photo->is_featured = false;
                $photo->save();
            }
        }
        if ($request->hasfile('is_featured')) {
            $image = $request->file('is_featured');
            $name = $image->getClientOriginalName();
            //$location = public_path('/images/uploads/' . $name);
            $image->move(public_path() . '/images/uploads/', $name);
            $photo = new Photo();
            $photo->property_id = $property->id;
            $photo->location = $name;
            $photo->is_featured = true;
            $photo->save();
        }

        return redirect()->route('my.properties');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'is_featured' => 'required',
            'all_images' => 'required',
            'all_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->type = $request->type;
        $property->offer = $request->offer;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->space = $request->space;
        $property->total_room = $request->total_room;
        $property->city = $request->city;
        $property->area = $request->areas;
        $property->building_year = $request->building_year;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->parking = $request->parking;
        $property->date = $request->date;
        $property->address = $request->address;
        $property->is_air_condition = $request->is_air_condition == 'on' ? true : false;
        $property->user_id = auth()->user()->id;
        $property->contact = $request->contact;
        $property->update();

        if ($request->hasfile('all_images')) {
            foreach ($request->file('all_images') as $image) {
                $name = $image->getClientOriginalName();
                //$location = public_path('/images/uploads/' . $name);
                $image->move(public_path() . '/images/uploads/', $name);
                $photo = Photo::find($property->get_featured_image()->id);
                $photo->property_id = $property->id;
                $photo->location = $name;
                $photo->is_featured = false;
                $photo->save();
            }
        }
        if ($request->hasfile('is_featured')) {
            $image = $request->file('is_featured');
            $name = $image->getClientOriginalName();
            //$location = public_path('/images/uploads/' . $name);
            $image->move(public_path() . '/images/uploads/', $name);
            $photo = new Photo();
            $photo->property_id = $property->id;
            $photo->location = $name;
            $photo->is_featured = true;
            $photo->save();
        }

        return redirect()->route('my.properties');
    }

    public function edit($id)
    {
        $property = Property::find($id);
        if ($property->user->id != auth()->user()->id) {
            return redirect('/')->with('error', 'Your are not eligible to make this operation');
        }

        $user = auth()->user();

        return view('agents.property.update', compact('property'), compact('user'));
    }

    public function destroy($id)
    {
        $property = Property::find($id);

        $property->delete();

        return redirect()->route('my.properties');
    }

    public function get_areas(Request $request)
    {
        $areas = City::find($request->id)->areas;
        $output = '';
        foreach ($areas as $row) {
            $output .= '<li class="dk-option " text="' . $row->name . '" role="option" data-value="' . $row->id . '" aria-selected="false" id="dk4-' . $row->id . '">' . $row->name . '</li>';
//            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        echo $output;
    }
}
