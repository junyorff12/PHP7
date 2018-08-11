<?php

include "functions-06-b.php";

function exibeFamilia($parentes)
{
	$html = "<ul>";

    foreach ($parentes as $parente){
    	$html .= "<li>";

    	$html .= $parente['parente'];

    	if (isset($parente['outro_parente']) && count($parente['outro_parente']) > 0){

    		$html .= exibeFamilia($parente['outro_parente']);
    	}

    	$html .= "</li>";
    }

	$html .= "</ul>"; 

	return $html;
}

echo exibeFamilia($familia);

