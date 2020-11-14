<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public $posts = [
        ['id' => 1, 'title' => 'First Post', 'content' => 'this is the content of first post'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'this is the content of second post'],
        ['id' => 3, 'title' => 'Third Post', 'content' => 'this is the content of third post'],
        ];
    public function index(){
        return view('posts.index', ['posts' => $this->posts]);
    }

    public function show($index){
        return view('posts.show', ['post' => $this->posts[$index]]);
    }
}
