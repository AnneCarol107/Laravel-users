<?php

namespace App\Http\Controllers;
use App\Models\User; 

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');

    }

    public function store(Request $request)
    {

        User::create($request->all());

        return redirect()->route('users-index');

    }

    public function show($id)
    {
        if(!$user = User::find($id)) {
            return redirect()->route('users-index');
        }

        return view('users.show', compact('user'));
    }

    public function edit($id) 
    {
        $users = User::where('id',$id)->first();
        
        if(!empty($users))
        {
            return view('users.edit',['users' => $users]);
        } 
        else 
        {
            return redirect()->route('users-index');
        }
    }


    public function update(Request $request, $id) 
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        User::where('id',$id)->update($data);
        
        return redirect()->route('users-index');
    }

    public function delete($id) {

        $users = User::findOrFail($id);
        $users->delete();
        
        return redirect()->route('users-index');
    }


}