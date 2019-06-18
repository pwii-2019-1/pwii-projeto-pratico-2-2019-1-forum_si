<?php


class Sessao
{
    public static function setAdmin($admin)
    {
        $_SESSION['admin'] = serialize($admin);
    }

    public static function getAdmin($indice)
    {
        $indice = 'get' . ucwords($indice);
        return ($_SESSION['admin']) ? unserialize($_SESSION['admin'])->$indice() : null;
    }

    public static function logado($status)
    {
        $_SESSION['logado'] = $status;
    }

    public static function getLogado()
    {
        return ($_SESSION['logado']) ? $_SESSION['logado'] : false;
    }

    public static function gravaMensagem($mensagem)
    {
        $_SESSION['mensagem'] = $mensagem;
    }

    public static function existeMensagem()
    {
        if(isset($_SESSION['mensagem'])) {
            return $_SESSION['mensagem'] == '' ? false : true;
        }
    }

    public static function limpaMensagem()
    {
        unset($_SESSION['mensagem']);
    }

    public static function retornaMensagem()
    {
        $msg = ($_SESSION['mensagem']) ? $_SESSION['mensagem'] : "";

        $_SESSION['mensagem'] = '';

        return $msg;
    }

    public static function gravaFormulario($form)
    {
        $_SESSION['form'] = $form;
    }

    public static function limpaFormulario()
    {
        unset($_SESSION['form']);
    }

    public static function getForm($key)
    {
        return (isset($_SESSION['form'][$key])) ? $_SESSION['form'][$key] : "";
    }

    public static function existeFormulario()
    {
        return (isset($_SESSION['form'])) ? $_SESSION['form'] : "";
    }

}