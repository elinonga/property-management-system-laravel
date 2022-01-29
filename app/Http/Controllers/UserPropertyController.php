<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPropertyController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index(User $user)
    {

        $properties = $user->properties()->paginate(10);

        return view('users.properties.index', [
            'user' => $user,
            'properties' => $properties
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $users = User::get();
        return view('users.properties.all', [
            'users' => $users,
        ]);
    }


    public function edit($id)
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
