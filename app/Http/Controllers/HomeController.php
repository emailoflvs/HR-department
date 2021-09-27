<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use \Auth;
//use Illuminat\Auth;
//use App\Http\Controllers\Auth;
use TCG\Voyager\Voyager;
use TCG\Voyager\Policies\BasePolicy;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


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
        $user = Auth::user();
        return view('home');
    }

}
