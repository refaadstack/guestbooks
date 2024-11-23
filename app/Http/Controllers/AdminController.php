<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $pesan = Pesan::all();
        return view('front.welcome-admin', compact ('pesan'));
    }
}
