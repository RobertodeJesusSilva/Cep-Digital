<?php

    use PHPUnit\Framework\TestCase;

    use Roberto\CepDigital\busca;

    class buscaTeste extends TestCase{
     /**
      * @dataProvider provedorDeTeste
      */

       public function testBuscaEnderecoPorCepUsoPadrao(string $input, array $esperado)
    {
        
        $resultado = new busca;
        $resultado = $resultado->buscaEnderecoPorCep($input);
        
        $this->assertEquals($esperado, $resultado); 

    }

          public function provedorDeTeste(){
            
                    return [
                        "Primeiro Teste" => [
                            "55018591", 
                            [
                                    "cep" => "55018-591",
                                    "logradouro" => "Travessa General Americano Freire",
                                    "complemento" => "",
                                    "bairro" => "Salgado",
                                    "localidade" => "Caruaru",
                                    "uf" => "PE",
                                    "ibge" => "2604106",
                                    "gia" => "",
                                    "ddd" => "81",
                                    "siafi" => "2381"
                                ]
                            ],

                            "Segundo Teste" => [
                                "55018000", 
                                [
                                    "cep" => "55018-000",
                                    "logradouro" => "Rua Neco Lira",
                                    "complemento" => "",
                                    "bairro" => "Salgado",
                                    "localidade" => "Caruaru",
                                    "uf" => "PE",
                                    "ibge" => "2604106",
                                    "gia" => "",
                                    "ddd" => "81",
                                    "siafi" => "2381"
                                    ]
                                ],
                                "Terceiro Teste" => [
                                    "01001000",
                                    [
                                        "cep" => "01001-000",
                                        "logradouro" => "Praça da Sé",
                                        "complemento" => "lado ímpar",
                                        "bairro" => "Sé",
                                        "localidade" => "São Paulo",
                                        "uf" => "SP",
                                        "ibge" => "3550308",
                                        "gia" => "1004",
                                        "ddd" => "11",
                                        "siafi" => "7107"
                                    ]
                                ]
               
                    ];

                }

    }

?>