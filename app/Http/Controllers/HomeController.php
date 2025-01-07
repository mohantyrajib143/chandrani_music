<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Render the Home Page
    public function home()
    {
        return view('home'); // Returns the home.blade.php view
    }

    // Render the About Page
    public function about()
    {
        return view('about'); // Returns the about.blade.php view
    }

    // Render the Contact Page
    public function contact()
    {
        return view('contact'); // Returns the contact.blade.php view
    }
}
