<?php

namespace vince\digitalcep;

Class Search {
    private $url ="https://viacep.com.br/ws/";

    Public function pegaEnderecoCep(string $cep): array {
    $cep= preg_replace('/[^0-9]/im', '', $cep);

    $pega = file_get_contents($this->url . $cep . "/json");

    return (array) json_decode($pega);

}

}