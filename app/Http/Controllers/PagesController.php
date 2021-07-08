<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        $name = 'Ivan';
        $names = ['Ivan', 'Ivi', 'Ivanoff'];
        return view('about', [
            'names' => $names,
            'name' => $name
        ]);
    }


}
