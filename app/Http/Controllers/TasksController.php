<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    function create () {
    }
    function store () {
        $data = request()->only(['title', 'About']);
        dd($data);
    }
}
