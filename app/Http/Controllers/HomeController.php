<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "Brandex";
        $keyword = "";
        $description = "";

        $count_user = 0;
        $count_department = 0;
        $count_group = 0;
        $count_document = 0;


        return view('admin.pages.home', compact('title', 'keyword', 'description','count_user','count_department','count_group','count_document'));
    }
}
