<?php
include 'ControladorInterface.php';
include 'Televisao.php';

function operarDispositivo(ControladorInterface $disp){
    if($disp::getStatus()){
        $disp->desligar();
        return;
    }
    $disp->ligar();
}

$tv1 = new Televisao();
$tv2 = new Televisao();

operarDispositivo($tv1);
operarDispositivo($tv2);