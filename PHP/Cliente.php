<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;


    class Cliente extends Pessoa{
        protected string $pagamento;

        public function construct__(string $cpf,string $nome,string $telefone,string $endereco, string $pagamento){
            parent:: construct__($cpf,$nome,$telefone,$endereco);
            $this->pagamento = $pagamento;
        } // fim do construtor

        public function get__(string $variavel):mixed{
            return $this->variavel;
        }

        public function set__(string $variavel, string $novoDado):void{
            return $this->variavel = $novoDado;
        }

        public function imprimir():string{
            return parent:: imprimir().
                   "Modo de Pagamento: ".$this->pagamento;
        }

    }

?>