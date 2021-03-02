<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url|max:255',
            'description' => 'required|max:255',
        ]);

        $link = tap(new \App\Link($data))->save();

        return redirect('/');
    }

    public function submit() {
        return view('submit');
    }
}

