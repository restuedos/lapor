<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }
    
    /**
     * Store a new pengaduan instance.
     *
     * @return void
     */
    public function store(Request $request)
    {
        dd($request);
    }
}
