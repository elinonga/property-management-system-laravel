<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserUpdateController extends Controller
{


    public function index() {
        return view('users.update', ['user' => auth()->user()]);
    }


    public function update(Request $request, User $user) {

        // validate
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'phone' => 'required|max:255',
            'about' => 'required',
            'facebook' => 'required|max:255',
            'twitter' => 'required|max:255',
            'google' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'pinterest' => 'required|max:255',
            'email' => 'required|max:255',
            'avatar' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Delete old avatar
        $destination = 'img/agents/'.$user->avatar;
        if(File::exists($destination)) {
            File::delete($destination);
        }

        // Image upload
        $userImageName = time() . '-' . $request->name . '.' .
            $request->avatar->extension();
        $request->avatar->move(public_path('img/agents/'), $userImageName);


        // update the user
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'google' => $request->google,
            'linkedin' => $request->linkedin,
            'pinterest' => $request->pinterest,
            'avatar' => $userImageName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // redirect
        return redirect()->route('agents.all');


    }
}
