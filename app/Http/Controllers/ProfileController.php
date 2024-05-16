<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    //Function for getting user
    public function index()
    {
        $users = User::get();
        return view('profile.user.index', compact('users'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('profile.user.update',compact('users'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',

            ]
        );
        $id = $request['id'];
        $users = user::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone_number = $request->phone_number;
        $users->save();
        return redirect()->route('profile.get');
    }

    /**
     * Delete the user's account.
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('profile.get');
    }
    
    public function view($id)
    {
        $users = User::find($id);
        return view('profile.user.show',compact('users'));
    }
    public function us($id){
        $users = User::find($id);
        return view('profile.user.userprofile',compact('users'));

    }
}
