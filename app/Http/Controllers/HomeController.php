<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Newsletters;
use App\Models\Contacts;
use Illuminate\Support\Facades\Log;
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
            \Log::error("Error in HomeController: " . $e->getMessage() . " at line " . $e->getLine());
            
            // Optionally, you can display an error page or a friendly message
            return response()->view('errors.general', ['message' => 'Something went wrong. Please try again later.'], 500);
        }
    }

    public function newsletters(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
            ]);
            
            // Check if the email already exists in the newsletters table
            if (Newsletters::where('email', $request->email)->exists()) {
                session()->flash('error', 'This email is already subscribed to our newsletter.');
            } else {
                // Create a new subscription if the email doesn't exist
                Newsletters::create([
                    'email' => $request->email,
                ]);

                session()->flash('success', 'Thank you for subscribing to our newsletter!');
            }

            return redirect()->back();
        }
        catch (Exception $e) {
            // Catch general exceptions
            session()->flash('error', 'Error: ' . $e->getMessage());
            return redirect()->back();
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

    public function contactSave(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ]);
            
            // Create a new contacts
            Contacts::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);

            session()->flash('success', 'Thank you for contacting us!');

            return redirect()->back();
        }
        catch (Exception $e) {
            // Catch general exceptions
            session()->flash('error', 'Error: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
