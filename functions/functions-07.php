<?php

include "functions-06.php";

function exibe($cargos)
{
	$html = '<ul>';

    foreach ($cargos as $cargo){
    	$html .= '<li>';

    	$html .= $cargo['nome_cargo'];

    	if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            
            $html .= exibe($cargo['subordinados']);
    	}

    	$html .= '</li>';
    }

	$html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);

