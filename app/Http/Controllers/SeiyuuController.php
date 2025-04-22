<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeiyuuController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->query('q', 'kana');
        $response = Http::get("https://api.jikan.moe/v4/people", [
            'q' => $keyword
        ]);

        $seiyuuList = $response->json('data');

        return view('seiyuu', compact('seiyuuList', 'keyword'));
    }
}

