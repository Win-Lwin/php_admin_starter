<?php

class AuthController extends Controller {
    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }
}