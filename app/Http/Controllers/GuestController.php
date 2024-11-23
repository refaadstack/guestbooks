<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function edit(Pesan $pesan){
        return view('front.editpesan', compact('pesan'));
    }
}
