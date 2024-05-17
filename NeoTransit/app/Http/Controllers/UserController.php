<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function addUserView(){
        return view('admin.adduser');
    }

    public function updateUserView(){
        return view('admin.updateuser');
    }

    public function updateUser(Request $request)
    {
        // Step 3: Add Validation
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'mobileNumber' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'sometimes|required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Step 4: Update the User Data
        $user = Auth::user();
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->mobileNumber = $request->mobileNumber;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        // Step 5: Return a Response
        return redirect()->route('updateUser');
    }


}
