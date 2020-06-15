<?php
session_start();
use andresvince\digitalcep\Search;
require_once "vendor/autoload.php";
include "src/servicoValidacao.php";
include "src/servicoMensagemSessao.php";
$cep = $_POST['numcep'];
validaCep($cep);
$busca = new Search;
$resultado = $busca->pegaEnderecoCep($cep);
if ($resultado['erro'] == 1) {
    setarMensagemErro ('Este número de CEP não existe');
    // obterMensagemErro();
}
else {
$_SESSION ['resultado'] = $resultado;
}

header('location: exemplo.php');