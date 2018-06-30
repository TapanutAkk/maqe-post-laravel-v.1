<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    const DATA = Post::DATA;

    public function page($id){

        $posts = self::DATA;

        $page = $this->findFirstAndFinalPostPerEachPage($id, count($posts));

        return view('post.index', compact('posts','page'));

    }

    public function getPost($id){

        return self::DATA[$id-1];

    }

    private function findFirstAndFinalPostPerEachPage($id, $count_post){

        $finalPost = $id*8;
        $firstPost = $finalPost-7;

        if($finalPost > $count_post){
            $finalPost = $count_post;
        }

        return [
            'first' => $firstPost,
            'final' => $finalPost
        ];

    }
}
