<?php

function defineCep (array $resultado, string $cep) : bool
{
    if (validaCep($cep))
    {
        print_r($resultado);
        echo '<br>CEP: ' . $resultado['cep'];
        echo '<br>Logradouro: ' . $resultado['logradouro'];
        echo '<br>Complemento: ' . $resultado['complemento'];
        echo '<br>Bairro: ' . $resultado['bairro'];
        echo '<br>Localidade: ' . $resultado['localidade'];
        echo '<br>UF: ' . $resultado['uf'];
        echo '<br>IBGE: ' . $resultado['ibge'];
        echo '<br>GIA: ' . $resultado['gia'];
        return;
	}
	else
    { 
        echo 'Não tá validando';
        obterMensagemErro();
        return;
    }
} 


