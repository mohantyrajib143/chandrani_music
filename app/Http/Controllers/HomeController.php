<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use Exception;

class HomeController extends Controller
{
    // Render the Home Page
    public function home()
    {
        try {
            // Fetch the latest 5 active videos
            $videos = Videos::where('is_active', 1)
                           ->orderBy('id', 'desc')
                           ->limit(5)
                           ->get();

            // Pass videos to the home view
            return view('home', compact('videos'));
        } catch (Exception $e) {
            // Log the error message and line number
            \Log::error("Error in HomeController@home: " . $e->getMessage() . " at line " . $e->getLine());
            
            // Optionally, you can display an error page or a friendly message
            return response()->view('errors.general', ['message' => 'Something went wrong. Please try again later.'], 500);
        }
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
