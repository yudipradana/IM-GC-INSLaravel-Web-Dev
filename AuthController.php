<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
}

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
 
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
       
        ]);


        return redirect()->route('welcome', $data);
    }

    public function showWelcomePage($first_name, $last_name)
    {
        return view('welcome', compact('first_name', 'last_name'));
    }
}
