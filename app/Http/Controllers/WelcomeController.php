<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SignupRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * User login page
     * 
     * @return View
     */
    public function loginPage()
    {
        return view('pages/login');
    }

    public function doLogin(Request $request)
    {
        $postData = $request->all();

        $conditions = [
            'email' => $postData['username'],
            'password' => $postData['password'],
            'active' => 1
        ];
        
        if (Auth::attempt($conditions)) {
            return redirect()->intended('/')->with('Welcome ' . Auth::user()->name);
        }

        return redirect()->back()->withErrors('Please check your login credentials and try again.');
    }

    /**
     * User sign up page
     * 
     * @return View
     */
    public function singUpPage()
    {
        return view('pages/signup');
    }

    /**
     * Handling the sign up for actions.
     * 
     * @param  SignupRequest
     * @return redirect
     */
    public function doSingUp(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->input('displayname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'active' => 0
        ]);

        return redirect()->back()->withSuccess('User created');
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
