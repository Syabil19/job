<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
{
    return Inertia::render('Job', [
        'user' => auth()->user(),

    ]);
}
}