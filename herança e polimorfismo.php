<?php

class Veiculo {

    public $nome;
    public $potencia;
    public $preco;

    public function __construct($nome, $potencia, $preco){
        $this->nome = $nome;
        $this->potencia = $potencia;
        $this->preco = $preco;
    }

    public function ligar(){
        echo "O veículo $this->nome está sendo ligado.\n";
    }

    public function mover(){
        echo "O veículo está se movendo.\n";
    }
}

class Terrestre extends Veiculo {

    public function mover(){
        echo "Vrum vrum! O veículo terrestre $this->nome está andando com potência $this->potencia.\n";
    }
}

class Aereo extends Veiculo {

    public function mover(){
        echo "Zum zum! A aeronave $this->nome está voando com potência $this->potencia.\n";
    }
}

class Aquatico extends Veiculo {

    public function mover(){
        echo "Splash! O veículo aquático $this->nome está navegando com potência $this->potencia.\n";
    }
}

$carro = new Terrestre("Gol", "1.6", 45000);
$aviao = new Aereo("Boeing 737", "20.0", 500000000);
$navio = new Aquatico("Titanic II", "30.0", 900000000);

$veiculos = [$carro, $aviao, $navio];

foreach($veiculos as $v){

    $v->ligar();
    $v->mover();

    echo "Preço: R$ $v->preco\n";
    echo "-----------------------------\n";
}

?>