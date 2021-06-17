<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            ['name' => '博霊霊夢', 'mail' => 'reimu@hakurei.com'],
            ['name' => '霧雨魔理沙', 'mail' => 'marisa@kirisame'],
            ['name' => 'レミリア・スカーレット', 'mail' => 'remiria@komakan']
        ];

        return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
