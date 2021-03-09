<?php

    require_once "vendor/autoload.php";
    
    use \Roberto\CepDigital\busca;

    $Busca = new busca();//Aqui instanciamos a classe "busca"

    $resultado = $Busca->buscaEnderecoPorCep("55018-591");
    print_r($resultado);

    
?>