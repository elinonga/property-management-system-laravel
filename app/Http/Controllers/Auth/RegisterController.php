<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {

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


        // Image upload
        $userImageName = time() . '-' . $request->name . '.' .
            $request->avatar->extension();
        $request->avatar->move(public_path('img/agents/'), $userImageName);


        // store the user
        User::create([
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


        // sign the user in
        auth()->attempt($request->only('email', 'password'));


        // redirect
        return redirect()->route('home');

    }

}
