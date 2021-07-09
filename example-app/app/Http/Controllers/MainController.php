<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function database() {
        
        $messages = new Test();
        return view('database', ['messages' => $messages->all()]);
    }

    public function message_check(Request $request) {

        $messages = [
            "name" => "name_field is not valid",
            "message" => "name_field is not valid"
        ];

        $validation = $request->validate([
            'name' => 'required',
            'message' => 'required',
        ], $messages);
    

        $review = new Test();
        $review->name = $request->input('name_field');
        $review->message = $request->input('message_field');

        $review->save();
        return redirect()->route('database');
    }
}
