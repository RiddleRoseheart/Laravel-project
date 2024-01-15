<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
        public function show()
        {
            return view('profile', ['user' => Auth::user()]);
        }

        public function edit()
        {
            return view('updateProfile', ['user' => Auth::user()]);
        }

        public function update(Request $request)
    {
    $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'birthday' => 'nullable|date',
            'about_me' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->birthday = $request->birthday;
    $user->about_me = $request->about_me;
    

    if ($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        $avatar->storeAs('public/avatars', $filename);
        $user->avatar = $filename;
     }

    $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}
