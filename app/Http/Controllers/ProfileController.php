<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = auth()->user()->profile;
        $user = auth()->user();

        return view('agents.profile.index', compact(['profile', 'user']));
    }

    public function update(Request $request)
    {
        auth()->user()->profile->update([
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'about' => $request->about
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if ($request->hasFile('avatar')) {
            $originalImage = $request->file('avatar');
            $imageName = $originalImage->getClientOriginalName();
            $directory = public_path('/images/uploads/avatar/');
            $imageUrl = $directory . $imageName;
            Image::make($originalImage)->resize(100, 100)->save($imageUrl);

            auth()->user()->profile->update([
                'avatar' => $imageName,
            ]);
        }

        return redirect()->route('my.profile');
    }

    public function change_password()
    {
        $user = auth()->user();
        return view('agents.profile.change-password', compact('user'));
    }

    public function change_password_update(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), auth()->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('new_password'), $request->get('confirm_new_password')) != 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $this->validate(request(), [
            'current_password' => 'required',
            'new_password' => 'required|string|min:6',
        ]);

        //Change Password
        $user = auth()->user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return redirect()->route('my.profile.change.password')
            ->with("success", "Password changed successfully");
    }

    public function my_properties()
    {
        $properties = auth()->user()->properties;
        $user = auth()->user();
        return view('agents.profile.my-properties', compact('properties'), compact('user'));
    }
}
