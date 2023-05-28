<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Category;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Category::all();
        return view('auth.register', compact('categories'));
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        $clientData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $clientData['Name'] = $clientData['name'];
        $clientData['Email'] = $clientData['email'];
        $clientData['Address'] = 'Marrakech';

        $client = Client::create($clientData);
        $client->save();

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}