<?php

$pessoa = array(
  'nome' =>'jr',
  'idade' =>31
);

foreach ($pessoa as &$value){
    if (gettype($value) === 'integer') $value += 10;
    echo $value."<br>";
}

print_r($pessoa);
