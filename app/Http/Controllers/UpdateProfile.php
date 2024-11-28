<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UpdateProfile extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validatedName = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        if ($request->email !== Auth::user()->email){
            $validatedEmail = $request->validate([
                'email' => 'required|unique:users|max:255',
            ]);
        }
        $user = User::find(Auth::user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('profile');
    }
}
