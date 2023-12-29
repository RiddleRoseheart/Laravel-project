<?php

namespace App\Http\Controllers;
use App\Models\User;



use Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// we made this Authentification pagina on the cmd 
// we will use it for the authentification  of each user 
class AuthentificationM extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    // function voor loginPost
    // in this function well be receiving a request which contains all the data that is "post" from the form
    function loginPost(Request $request) {
        // we will need to add an action to the form 
        // we have to validate the request 
        $request ->validate([
            'email'=> 'required',
            //this means we need an eail and if we dont get it we give a error 
            'password'=> 'required',
            //the names are like the same name we gave in the login page 
            
        ]);

       //filtering and extracting data from an HTTP request 
        $credentials = $request -> only('email','password');
        if(Auth::attempt( $credentials )){
            // why Auth and not AuthentificationM gotta search this up!
            //if true dus pass correct deze gaat de user redirecten
            return redirect()->intended(route('home'))->with('success','Login succesfull');
    }
    return redirect()->intended(route('login'))->with('error', 'Login details are not valid');//error
}

function registrationPost(Request $request) {

    $request ->validate([
        'email'=> 'required|email|unique:users',
        // the email is to be sure theres an @, the unique is to be sure it aint used 2 times 
        'password'=> 'required',
        'name'=>'required'
    ]);

    $data['name']= $request -> name;
    $data['email']= $request -> email;
    $data['password']= Hash::make($request->password);
    //$data['password']= bcrypt($request -> password);
    $user = User::create( $data);
    if(!$user){ //filtering and extracting data from an HTTP request

        $credentials = $request -> only('email','password');

        if(Auth::attempt( $credentials )){

            //if true dus pass correct deze gaat de user redirecten

            return redirect()->intended(route('home'))->with('success','Login succesfull');

    }
        //als er geen user is onder deze naam
        return redirect(route('registration'))->with('error','No User with those credentials found');
    }
// it worked? they made an account? lets redirect to the login !
    return redirect(route('login'))->with('success','Registration success full, you are now a member!');
}

//Logout :
function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('login'));


// we still havent given a route for the logout so now go to web and do it
}}