<?php

namespace App\Http\Controllers\Api;

use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = Property::where('pending', true)->orderBy('created_at', 'DESC')->with('user')->get();

        return $this->showAll($feeds);
    }

   
    public function search(Request $request)
    {
        $type = $request->property;
        $offer = $request->offer;
        $city = $request->city;

        $properties = Property::where('type', 'LIKE', '%' . $type . '%')
            ->where('offer', 'LIKE', '%' . $offer . '%')
            ->where('city', 'LIKE', '%' . $city . '%')->with('user')->get();
        
        return $this->showAll($properties);
    }

    
    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
