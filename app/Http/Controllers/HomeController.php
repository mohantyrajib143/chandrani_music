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

    // Render the Seasonal Page
    public function seasonal()
    {
        return view('seasonal'); // Returns the seasonal.blade.php view
    }

    // Render the Entertainment Page
    public function entertainment()
    {
        return view('entertainment'); // Returns the entertainment.blade.php view
    }

    // Render the Traveller Page
    public function traveller()
    {
        return view('traveller'); // Returns the traveller.blade.php view
    }

    // Render the Music Page
    public function music()
    {
        return view('music'); // Returns the music.blade.php view
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
