<?php
session_start();

function verificaLogado()
{
    if(!usuarioEstaLogado())
    {
        $_SESSION["danger"] = "vc nao esta logado ";
        header("Location:index.php");
        die();
    }   
}

function usuarioEstaLogado()
{
    return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email)
{
    $_SESSION["usuario_logado"] = $email;
}

function logout()
{
    session_destroy();
    session_start();
}

