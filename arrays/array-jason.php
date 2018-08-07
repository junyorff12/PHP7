<?php
$pessoas = array();

array_push($pessoas,
     array(
           'nome' => "JR",
           'idade' => 31,
     ),
     array(
           'nome' => "FF",
           'idade' => 12,
     )
);

echo json_encode($pessoas);
