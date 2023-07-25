<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index(){
        return view('dashboard.index');
    }
    public function categoryinsert(){
        return view('dashboard.product_work.product_category.category-insert');
    }
    public function categorylist(){
        return view('dashboard.product_work.product_category.category-list');
    }
}
