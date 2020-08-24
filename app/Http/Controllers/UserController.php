<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {

        return view('user_profile');
    }
}
