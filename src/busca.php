<?php

    namespace Roberto\CepDigital;

    class busca {
        
        private $url = "http://viacep.com.br/ws/";

        public function buscaEnderecoPorCep(string $cep):array
        {
           
            $cep = preg_replace('/[^0-9]/im', '', $cep);

            $lerUrl = file_get_contents($this->url . $cep . "/json");
            
            return (array) json_decode($lerUrl);
        }

    }
    
?>