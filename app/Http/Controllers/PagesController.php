<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    Public function getIndex() {
      return view('index');
    }

    Public function getListProducts() {
    	return view('listproduct');
    }

    Public function getSignUp() {
    	return view('signup');
    }

    Public function getSettings() {
    	return view('settings');
    }

    Public function getDashboard() {
    	return view('dashboard');
    }
}
