<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Masmerise\Toaster\Toaster;

class UserController extends Controller
{
    public function addUser(){
        return view('manageUser.add_user');
    }
    public function showUser(Request $request){
        // $users = User::all();
         $perPage = $request->input('perPage', 5);  

    // Start the query for retrieving categories.
    $query = User::query();

    // If a search keyword is provided, filter categories by name.
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('email', 'LIKE', '%' . $search . '%');
    }

    // Paginate the results.
    $users = $query->paginate($perPage);
        
        return view('manageUser.user',compact('users','query','perPage'));
    }

    public function storeUser(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            //'email' => 'required|email|unique:users,email', // specify table and column
            'password' => 'required|min:6|max:10'

        ]);

           $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        Toaster::success('User Added Successfully!');
        return redirect()->route('show.users');
    }
    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        Toaster::success('User Deleted Successfully!');
        return redirect()->route('show.users');
    }
    public function editUser($id){
        $user = User::findOrFail($id);
        return view('manageUser.edit_user', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|min:6|max:10'
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);
        Toaster::success('User Updated Successfully!');
        return redirect()->route('show.users');
    }
    public function viewUser($id){
        $user = User::findOrFail($id);
        return view('manageUser.view_user', compact('user'));
    }
}
