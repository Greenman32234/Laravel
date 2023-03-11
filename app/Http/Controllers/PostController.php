<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post (Request $request) {
        return redirect('home');
    }
    public function task () {
        return view('task');
    }
}
