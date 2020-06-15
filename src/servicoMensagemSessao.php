<?php
session_start();

function setarMensagemErro (string $mensagem) : void
{
        unset($_SESSION['mensagem-valida']);
        $_SESSION['mensagem-de-erro'] = $mensagem;

}

function obterMensagemErro () : ?string
{
       if (isset($_SESSION['mensagem-de-erro']))
       {
               return $_SESSION['mensagem-de-erro'];
       }
       else
       {
               return null;
        }
}

function setarMensagemValida (string $mensagem) : void
{       
        unset($_SESSION['mensagem-de-erro']);
        $_SESSION['mensagem-valida'] = $mensagem;
}

function obterMensagemValida () : ?string
{
       if (isset($_SESSION['mensagem-valida']))
       {
        return $_SESSION['mensagem-valida'];
       }
       else
       {
               return null;
       }
       
}

function removerMensagemErro () : void
{
        if (isset($_SESSION['mensagem-de-erro']))
        {
        unset($_SESSION['mensagem-de-erro']);
        }
}

function removerMensagemValida () : void
{
        if (isset($_SESSION['mensagem-valida']))
        {
        unset($_SESSION['mensagem-valida']);
        }

}