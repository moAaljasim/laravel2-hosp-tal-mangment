<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview() {
        return view ('admin.add_doctor');
    }
}
