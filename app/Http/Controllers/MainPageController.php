<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class MainPageController extends Controller
{
    public function __invoke()
    {

     //   $article = Article::find(1);

//        dd($article->user);

        $users = User::query()
            ->select(["id","name","email"])
            ->paginate(5);



        return view("welcome", [
            'users'=>$users,
        ]);
    }
}
