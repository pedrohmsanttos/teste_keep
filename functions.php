<?php

function ordernarLetras($letra1, $letra2)
{
    if($letra1 == $letra2){
        return 0;
    }
        
    

    $pos1 = strpos($alfabeto, $letra1);
    $pos2 = strpos($alfabeto, $letra2);

    $resultado = $pos1 < $pos2 ? -1 : 1;

    return $resultado;
}

function ordernarBooglan($palavra1, $palavra2)
{
    $i = 0;
    $ordem = 0;

    while ($ordem == 0){
        
        if(!isset($palavra1[$i])){
            return -1;
        }
            
        if(!isset($palavra2[$i])){
            return 1;
        }
        $letra1 = $palavra1[$i];
        $letra2 = $palavra2[$i];

        $ordem = ordernarLetras($letra1, $letra2);
        $i++;
    }

    return $ordem;
}

function fatoracao($fatora, $indice)
{
    $fatorado = 1;
    for($i=1;$i<$indice;$i++)
    {
        $fatorado = bcmul($fatorado, '20');
    }
    return bcmul($fatorado, $fatora);
}

