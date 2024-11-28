<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use App\Models\Auto;
use App\Models\UserAuto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
        ]);
        $auto = Auto::create([
            'brand' => $request->brand,
            'model' => $request->model
        ]);
        UserAuto::create([
            'auto_id' => $auto->id,
            'user_id' => Auth::id()
        ]);
        return redirect()->route('home');
    }
}
