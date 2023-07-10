<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function saveUser(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email',
            'state' => 'required',
            'profession' => 'required',
            'message' => 'required',
        ]);

        // Create a new user record
        $user = new User();
        $user->name = $request->input('first_name').' '.$request->input('last_name');
        $user->email = $request->input('email');
        $user->state = $request->input('state');
        $user->profession = $request->input('profession');
        $user->message = $request->input('message');
        $user->active = 0;
        $user->password = bcrypt(generateRandomNumber());
        $user->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'User saved successfully!');
    }


}
