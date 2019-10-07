<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
class PhoneController extends Controller
{
    public function index()
    {
        $phone = User::find(2)->phone;
        $user = Phone::find(1)->user;
        //dd($phone);
        return response()->json($user);
    }
    public function phone_create()
    {
        $user = User::find(1);
        $phone = new Phone;
        $phone->phone = '9429343852';
        $user->phone()->save($phone);
        return response()->json($phone);

        // $user = User::find(1);
        // $phone = new Phone;
        // $phone->phone = 'papapa';
        // $user->phone()->save($phone);
        
        // return response()->json($user);
    }

}
