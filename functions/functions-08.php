<?php

//funcao anonima

function test($callback)
{
    $callback();
}


test(function(){
    
    echo "Terminou!";

});