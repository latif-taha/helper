<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    function homepage(){
        return view('client.index');
    }
    function settingspage(){
        return view('client.settings');
    }
    function updateProfile(){

        return view('client.profile');
    }
    function choicepage(){
        return view('client.choice');
    }
    function listexpertpage(){
        return view('client.listexpert');
    }
}
