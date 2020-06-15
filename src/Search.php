<?php
namespace andresvince\digitalcep;

class Search
{
    private $url ="https://viacep.com.br/ws/";
    public function pegaEnderecoCep(string $cep): array 
    {
    $cep= preg_replace('/[^0-9]/im', '', $cep);
    $pega = file_get_contents($this->url . $cep . "/json");
    $retorno = (array) json_decode($pega);
    return $retorno;
    }
}
