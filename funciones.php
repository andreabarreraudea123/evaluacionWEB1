<?php


function calcularEdad($nacimiento, $actual){
    $edad=($actual-$nacimiento);
    return($edad);
}

function calcularBiotipo($biotipo){

    if($biotipo<1.70){
        echo("Para una altura de ".$biotipo." su biotipo es bajo<br>");
       
    }  

    elseif($biotipo>1.70 && $biotipo<1.80){
        echo("Para una altura de ".$biotipo." su biotipo es medio<br>");
    }
    else
    {
        echo("Para una altura de ".$biotipo." su biotipo es alto<br>");
    }

}

function Edad($nacimiento, $actual){
    $edad=($actual-$nacimiento);
    return($edad);
}



function Biotipo($biotipo){

    if($biotipo<1.70){
        return ("su biotipo es bajo<br>"); 
    }  

    elseif($biotipo>1.70 && $biotipo<1.80){
        return(" su biotipo es medio<br>");
    }
    else
    {
        return(" su biotipo es alto<br>");
    }

}  



    
?>