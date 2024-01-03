<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index()
{
    $users = User::all();
    return view('admin.users', ['users' => $users]);
}


//Update mijn users 
public function updateRole(Request $request, User $user)
{
    $request->validate([
        'role_' . $user->id => ['required', Rule::in([0, 1])],
    ]);

    $user->update(['is_admin' => $request->{'role_' . $user->id}]);

    return redirect()->back()->with('status', 'User role updated successfully');
}
}
