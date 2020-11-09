<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function createUser(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('components.register');
        } elseif ($request->isMethod('post')) {
            $email = $request->input('email');
            $pass = $request->input('pass');

            $email_valid = '/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z]{2,5}$/';
            $pass_valid = '/^[]A-Za-z0-9!@#\$%\^&\*()_\+\-~`\'\.,\\";:<>?{}]{8,12}$/';
            //проверка валидности эл.почты
            if (preg_match($pass_valid, $pass)) {
                return 'Все верно';
            } else {
                return 'Ошибка';
            }
        }
    }

    public static $a = 5;

    public static function getNumber()
    {
        return self::$a;
    }

    public function testUser($a = 4)
    {
        phpinfo();
    }
}
