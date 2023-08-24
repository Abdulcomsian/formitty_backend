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
        try{

        // Validate the form data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create a new user record
        $user = new User();
        $user->name = $request->input('first_name').' '.$request->input('last_name');
        $user->email = $request->input('email');

        $user->active = 1;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->assignRole(['user']);

        // Send the email
        self::sendRegistrationEmail($user->name, $user->email);
        // Redirect or return a response
        return redirect()->back()->with('success', 'User saved successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    function sendRegistrationEmail($username, $email) {
        $to = "haroonniaz96@gmail.com";
        // $to = "haroon@blondmail.com ";
        $subject = "New User Registration";
        $message = "Hello Admin,\r\n\r\nA new user has been registered with the following details:\r\n";
        $message .= "Username: " . $username . "\r\n";
        $message .= "Email: " . $email . "\r\n\r\n";
        $message .= "Thank you,\r\nYour Website";
    
        // Set additional headers (optional)
        $headers = "From: admin@yourwebsite.com\r\n";
        $headers .= "Reply-To: admin@yourwebsite.com\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
    
        // Send the email
        mail($to, $subject, $message, $headers);
    }
    

}
