<?php

class LogoutController extends Controller
{
    public function logout()
    {
        destroySession();
        redirect('home');
        exit;
    }
}