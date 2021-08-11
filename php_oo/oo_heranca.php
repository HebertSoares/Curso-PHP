<?php
class Veiculo{
    //class Veiculo é utilizada para manuteção, caso aja metodos iguais como vemos abaixo
    public $placa = null;
    public $cor = null;

    function acelerar(){
        echo'Acelerar';
    }
    function freiar(){
        echo 'Freiar';
    }
    function qualquerCoisa(){
        echo 'qualquercoisa';
    }
}

class Carro extends Veiculo{
    public $teto_solar = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor; 
    }
    
    function abrirTetoSolar(){
        echo 'Abrir teto solar';
    }
    function alterarPosicaoVolante(){
        echo 'Alterar posição volante';
    }
}
class Moto extends Veiculo{

    public $contraPesoGuidao = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }
  
    function empinar(){
        echo'Empinar';
    }
}


$carro = new Carro('ABC1234','Branco');
$moto = new Moto('DEF1122','Preto');

echo '<pre>';
print_r($carro);
echo '<br/> <br/>';
print_r($moto);
echo '</pre>';
echo'<hr/>';

$carro->abrirTetoSolar();
echo '<br />';
$carro->acelerar();
echo '<br />';
$carro->freiar();
echo '<br />';
$carro->qualquerCoisa();

echo '<hr/>';

$moto->empinar();
echo '<br />';
$moto->acelerar();
echo '<br />';
$carro->freiar();
echo '<br />';
$carro->qualquerCoisa();

?>
