<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;

class PublicController extends Controller
{

    use Common;

    //
    public function index()
    {
        return view('public.index');
    }

    public function contact()
    {

        return view('public.contact');
    }

    public function category()
    {

    }    
}
