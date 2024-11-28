<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\UserAuto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $UserAutos = UserAuto::select('auto_id')->where('user_id', Auth::id())->get();
        $UserAutosIds = $UserAutos->pluck('auto_id');
        $autos = Auto::whereIn('id', $UserAutosIds)->get();
        return view('home', compact('autos'));
    }
}
