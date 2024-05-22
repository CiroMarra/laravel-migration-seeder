<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;

class PageController extends Controller
{
    public function index() {
        $train = train::all();
        $data = [
            'train' => $train
        ];

        return view('home', $data);
    }
}
