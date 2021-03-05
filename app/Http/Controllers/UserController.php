<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    function login(Request $request)
    {


      $user=User::where(['email'=>$request->email])->first();

        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {

                $request->session()->put('user',$user->id);
                return redirect('/home');
            }
            else
            {
                return back()->with('fail','Invalid password');
            }
        }
        else
        {
            return back()->with('fail','No account found for this email');
        }

        }


        function register()
        {
            return view('register');
        }

        function createUser (Request $request)
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:5|max:12',
                'password2'=>'required|same:password'
            ]);
            $user=User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=> Hash::make( $request->input('password')),

            ]);
            if($user)
            {
                $request->session()->put('user',$user->id);
                return redirect('/home')->with('success','You have been successfuly registered');

            }
            else
                return back()->with('fail','Something went wrong');

        }


}
