<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use view;

class TestController extends Controller
{
    public function __invoke()
    {
//        User::query()->create([
//            "name" => "danila",
//            "email" => "voeka2@gmail.com",
//            "password" => Hash::make("123456")
//        ]);

        $user = User::query()->where("email","voeka2@gmail.com")->first();
        dd($user->attributesToArray());
        return view("test");
    }
}
