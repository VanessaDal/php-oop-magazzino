<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazzino</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- GOAL:
Definire la classe Magazzino e la classe Prodotto nel seguente modo:
Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori
Prodotto: definire gli attributi per nome, peso e prezzo
Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti -->

<div class="container">
<?php 

class Magazzino {

    public $name;
    public $location;
    public $prodotti;

    public function __countruct($name,$location){

        $this -> name = $name;
        $this -> location = $location;

    }

   

};

class Prodotto {

    public $name;
    public $peso;
    public $prezzo;

    public function __countruct($name,$peso,$prezzo){

        $this -> name = $name;
        $this -> peso = $peso;
        $this -> prezzo = $prezzo;

    }

   

};

$Magazzino=new Magazzino();

$Magazzino -> name = "Amazon";

$Magazzino -> location = "Milano";

$Prodotto1=new Prodotto();
$Prodotto1-> name = "Cellulari";
$Prodotto1-> peso = 200;
$Prodotto1-> prezzo = 300;

$Prodotto2=new Prodotto();
$Prodotto2-> name = "Latte";
$Prodotto2-> peso = 1;
$Prodotto2-> prezzo = 300;

$Magazzino -> prodotti = [$Prodotto1, $Prodotto2];

var_dump($Magazzino);

?>

</div>
    
</body>
</html>