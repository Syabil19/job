<?php

// Example: resources/controllers/JobController.php

namespace App\Http\Controllers;

use Inertia\Inertia;

class JobController extends Controller
{
    public function index()
    {
        sleep(50);  // Add a 3-second delay for testing
        return Inertia::render('Jobs/Index');
    }
}
