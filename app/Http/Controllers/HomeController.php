<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,Session;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function view_chart()
    {
        return view('chart');
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('home');
    }

}
