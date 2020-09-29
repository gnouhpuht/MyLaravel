<?php

namespace App\Http\Controllers;

class TestPostController extends Controller
{
    public function show($post){
        $posts = [
            'a' => 'hello',
            'b' => 'hi'
        ];

        if(!array_key_exists($post, $posts)){
            abort(404, 'đã có lỗi xảy ra');
        }

        return view('test', [
            'post' => $posts[$post]
        ]);
    }
}
