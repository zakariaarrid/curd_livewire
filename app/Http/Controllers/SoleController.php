<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class SoleController extends Controller
{
    public function index(Request $request) {
        return $request->server();
       // return User::where('name','LIKE','%s%')->get();
        return User::whereName('Aliya Ryan')->get();
    }
}
