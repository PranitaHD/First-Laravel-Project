<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullController extends Controller
{
    public function showContact() {
        return view('contact');
    }
    public function showRooms() {
        return view('rooms');
    }
    public function showAbout() {
        return view('about');
    }
}