<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public $posts = [
        [
            'id' => '1',
            'title' => 'Post One Title',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quis illum ipsum deleniti officiis sequi in quo. Tempore, fugit quasi.'
        ],
        [
            'id' => '2',
            'title' => 'Post Two Title',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quis illum ipsum deleniti officiis sequi in quo. Tempore, fugit quasi.'
        ],
        [
            'id' => '3',
            'title' => 'Post Three Title',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quis illum ipsum deleniti officiis sequi in quo. Tempore, fugit quasi.'
        ]
    ];

    public function index(){
        return view('posts.index', ['posts' => $this->posts]);
    }

    public function show($id){
        return view('posts.show', ['post' => $this->posts[$id] ]);
    }

}
