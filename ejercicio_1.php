<?php
    /**
    * 1. Funcionalidad: Comparar tres números y mostrarlos por pantalla en orden.
    @autor = Jesús Ferrer López
    @date 
    */

    $a = 1;
    $b = 2;
    $c = 3;

    if ($a >= $b >= $c) {
        echo "$a, $b, $c";
    }
    else if ($a >= $c >= $b){
        echo "$a, $b, $c";
    }
    else if ($b >= $a >= $c){
        echo "$b, $a, $c";
    }
    else if ($b >= $c >= $a){
        echo "$b, $c, $a";
    }
    else if ($c >= $b >= $a){
        echo "$c, $b, $a";
    }
    else {
        echo "$c, $a, $b";
    }
?>