<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        //Non fluent
        //DB::select(['table' => 'posts', 'where' => ['id' => 1]])

        //Fluent
        //DB:table('posts')->where('id', 1)->get()
        // return view('posts/index');

        # DB let you make db queries
        $id = 3;
        // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 3]);

        // $posts = DB::table('posts')
        //                 ->where('id', $id)
        //                 ->get();

        // $posts = DB::table('posts')
        //                 ->select('body')
        //                 ->get(); # Will return only the body of all the posts

        $posts = DB::table('posts')
                    ->where('created_at', '>', now()->subDay())
                    // ->whereBetween('id', [7, 9]) # check for id between 7 - 9 included
                    // ->whereNotNull('title')
                    // -> select('title')
                    // -> distinct() # get only distinct values
                    // -> orderBy('title', 'asc')
                    // -> latest() # check for created_at in a desc order
                    // -> oldest() # same in asc order
                    // if where is not true, it will check for orwhere
                    ->orWhere('title', 'Prof.')
                    # Returning methods
                    ->get();
                    # -> first() # get the first match
                    # -> find($id) # return null if it doesnt exist
                    # -> count() # return only the count
                    # -> min('id')
                    # -> max('id')
                    # -> sum('id')
                    # -> avg('id')
                    # -> insert([ 'title' => new title, 'body' => new body]) returns true if it's OK
                    # -> where('id', '=', 15)
                    # -> update([ 'title' => updated title, 'body' => 'updated body']) returns 1 boolean
                    # -> delete(); Delete based on the WHERE method
        dd($posts);
    }
}
