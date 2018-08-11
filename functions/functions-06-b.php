<?php

$familia = array(
    array(
        'parente' => 'Pai',
        'outro_parente' => array(
            array(
                'parente' => 'filho',
                'outro_parente' => array(
                    array(
                        'parente' => 'neto'
                    )
                )
            ),

            array(
            
                'parente' => 'filho2',
                'outro_parente' => array(
                    array(
                        'parente' => 'neto2',
                        'outro_parente' => array(
                            array(
                                'parente' => 'bisneto'
                            ),

                            array(
                                'parente' => 'bisneto2'
                            )
                        )
                    )
                )
            )
        )
    )
);