<?php
    namespace PHP\Modelo;

    class Pessoa{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;


        public function construct__(string $cpf,string $nome,string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        } // fim do construct

        public function get__(string $variavel):mixed{
            return $this->variavel;
        } // fim do get

        public function set__(string $variavel, string $novoDado):void{
            return $this->variavel = $novoDado;
        } // fim do set

        public function imprimir():string{
            return "<br>CPF: ".$this->cpf. 
                   "<br>Nome: ".$this->nome. 
                   "<br>Telefone: ".$this->telefone. 
                   "<br>Endereço: ".$this->endereco;     
        }
    }





?>