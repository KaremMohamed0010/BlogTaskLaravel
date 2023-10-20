<?php

namespace App\Http\Controllers;

use App\Actions\User\LoginUserAction;
use App\Actions\User\StoreUserAction;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;


class AuthController extends Controller
{
    public function Register(StoreUserRequest $request, StoreUserAction $StoreUserAction)
    {
        return $StoreUserAction->execute($request);
    }

    public function Login(LoginUserRequest $request, LoginUserAction $loginUserAction)
    {
        return $loginUserAction->execute($request);
    }
}
