<?php

namespace App\Http\Controllers;


use App\Models\Testimonial;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
{
    return Inertia::render('Home', [
        'user' => auth()->user(),
        
    ]);
}

}
