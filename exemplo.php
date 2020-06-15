<?php
use andresvince\digitalcep\Search;
require_once "vendor/autoload.php";
include "src/servicoMensagemSessao.php"
?>

<!DOCTYPE| html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de consulta</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device width, initial scale=1">
</head>
<body>
<h2>BUSCA CEP DIGITAL</h2>
<form action="script.php" method="post">
<?php
       $mensagemValida = obterMensagemValida();
		if (!empty($mensagemValida)) { 
            $resultado = $_SESSION['resultado'];
            //print_r($resultado);
            echo '<h3 style="margin:0;padding:0;">Resultado para o CEP ' . $resultado['cep'] . '</h3>';
            echo '<br>Logradouro: ' . $resultado['logradouro'];
            echo '<br>Complemento: ' . $resultado['complemento'];
            echo '<br>Bairro: ' . $resultado['bairro'];
            echo '<br>Localidade: ' . $resultado['localidade'];
            echo '<br>UF: ' . $resultado['uf'];
            echo '<br>IBGE: ' . $resultado['ibge'];
            echo '<br>GIA: ' . $resultado['gia'];
        }

        $mensagemDeErro = obterMensagemErro();
		if(!empty($mensagemDeErro))
		{
			echo $mensagemDeErro;
        }
?>

<p>Insira o CEP (somente números): <input type="text" name="numcep" value="" /></p>
<p><input type="submit" value="Enviar" /></p>

</form>

</body>

</html>