<?php

function validaCep (string $cep) : bool
{    
    $message=array("O campo não pode ser vazio, por favor, preencha corretamente.", "Valor inválido.", "Validou!");
    
    if(empty($cep)) 
    {
        setarMensagemErro ($message[0]);
        removerMensagemValida();
        return false;
        die();
    }
    elseif (strlen($cep) != 8) 
    {
        setarMensagemErro ($message[1]);
        removerMensagemValida();
        return false;
        die();
    }
    elseif (!is_numeric($cep)) 
    {
        setarMensagemErro ($message[1]);
        removerMensagemValida();
        return false;
        die();
    }
    else {
    setarMensagemValida($message[2]);
    removerMensagemErro();
    return true;
    }
} 

