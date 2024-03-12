<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use DataTables;


class HomeController extends Controller
{
    //  
    public function index()
    {
        return view('admin.dashboard');
    }

     public function userdetailsview()
    {
        //$users = User::all();
        return view('admin.userdetails'); //,compact('users')
    }
    public function getUsers()
    {   
        return DataTables::of(User::query())->make(true);
    }
    public function newUsers()
    {   
       return view('admin.newusercreate');
    }
    
}