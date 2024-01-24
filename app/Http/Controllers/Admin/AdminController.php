<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminIndex() {
        return view('admin.index_admin');
    }

    public function AdminFacility(){
        return view('admin.facility');
    }

    public function AddFacility(){
        
    }

    public function AdminFood(){
        return view('admin.food');
    }

    public function AdminReport(){
        return view('admin.report');
    }

    public function AdminUser(){
        return view('admin.user');
    }
}
