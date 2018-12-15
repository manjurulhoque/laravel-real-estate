<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login_page()
    {
        return view('admin.login');
    }

    public function users()
    {
        $users = User::where('id', '<>', auth()->user()->id)->get();
        return view('admin.users', compact('users'));
    }

    public function properties()
    {
        $properties = Property::all();

        return view('admin.properties', compact('properties'));
    }

    public function make_featured($id)
    {
        Property::find($id)->update([
            'is_featured' => true
        ]);

        return redirect()->route('admin.dashboard.properties');
    }

    public function remove_featured($id)
    {
        Property::find($id)->update([
            'is_featured' => false
        ]);

        return redirect()->route('admin.dashboard.properties');
    }

    public function accept($id)
    {
        Property::find($id)->update([
            'pending' => true
        ]);

        return redirect()->route('admin.dashboard.properties');
    }

    public function reject($id)
    {
        Property::find($id)->update([
            'pending' => false
        ]);

        return redirect()->route('admin.dashboard.properties');
    }
}
