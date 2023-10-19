<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function index(){
        $merchandise = Merchandise::get();

        return view('merchandise', compact('merchandise'));
    }
}
