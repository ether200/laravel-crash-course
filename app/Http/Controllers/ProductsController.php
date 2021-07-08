<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class ProductsController extends Controller
// {
//     public function index() {
//         $title = "Welcome to laravel course";
//         $description = "Created by dary";

//         $data = [
//             'productOne' => 'iPhone',
//             'productTwo' => 'Samsung',
//         ];

//         # Compact method is used to pass variables to the view
//         // return view('products.index', compact('title', 'description'));

//         # Pass variable with method With
//         // Good to use with one value
//         // return view('products.index')->with('data', $data);

//         // Directly in the view
//         return view('products.index', [
//             'data' => $data
//         ]);
//     }

//     public function about() {
//         return 'About Us Page';
//     }

//     # Using route parameters inside the controller
//     public function show($name) {

//         $data = [
//             'iphone' => 'iPhone',
//             'samsung' => 'Samsung',
//         ];

//         return view('products.index', [
//             # If it's a null it will return product $name does not exist.
//             'products' => $data[$name] ?? 'Product ' . $name . ' does not exist.'
//         ]);
//     }
// }
