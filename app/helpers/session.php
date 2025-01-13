<?php

// Inicia a sessão
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function isLoggedIn()
{
    return isset($_SESSION['username']);
}

function getSessionValue($key)
{
    return $_SESSION[$key] ?? null;
}
function setSessionValue($key, $value)
{
    $_SESSION[$key] = $value;
}

function unsetSessionValue($key)
{
    unset($_SESSION[$key]);
}

function destroySession()
{
    session_unset();
    session_destroy();
}

function redirect($url)
{
    header("Location: $url");
    exit();
}

function getGreetingMessage($username)
{
    date_default_timezone_set("America/Sao_Paulo");
    $hour = date('H:i');
    if ($hour < 12) {
        return "Bom dia, $username!";
    } elseif ($hour < 18) {
        return "Boa tarde, $username!";
    } else {
        return "Boa noite, $username!";
    }
}
