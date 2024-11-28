<?php

namespace App\Http\Controllers;

use App\Models\UserAuto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddAuto extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        UserAuto::create([
            'auto_id' => $id,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('home');
    }
}
