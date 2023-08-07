<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    public function loginProcess(Request $request){
        return redirect('dashboard');
    }
}
