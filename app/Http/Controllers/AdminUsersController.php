<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index()
    {
        return view('admin/users/index',[
            'users' => User::all() //select*from tbl-user
        ]);
    }
}
