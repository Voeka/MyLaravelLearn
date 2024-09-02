<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function __invoke()
    {
        // Создание пользователя (раскомментируйте, если нужно)
        // User::query()->create([
        //     "name" => "danila",
        //     "email" => "voeka2@gmail.com",
        //     "password" => Hash::make("123456")
        // ]);

        // Получение пользователя по e-mail
        $users = User::query()->get();

        // Если нужно использовать фабрику
        // User::factory(10)->create();

        // Проверка наличия пользователя
//        if ($user) {
            // Вывод атрибутов пользователя в массиве (раскомментируйте, если нужно)
            // dd($user->attributesToArray());
//        } else {
            // Если пользователь не найден
            // Можно вернуть соответствующее сообщение или обработать ошибку
//            return "Пользователь не найден.";
//        }

        return view("test", [
            'users'=>$users,
        ]);
    }
}
