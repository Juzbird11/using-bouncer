<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bouncer;

class UserController extends Controller
{
    public function index() {
        Bouncer::allow('admin')->to('ban-users');
    }
}   
