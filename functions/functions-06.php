<?php

$hierarquia =  array(
    
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
            	'nome_cargo' => 'Diretor Comercial',
            	'subordinados' => array(
            		array(
                        'nome_cargo' => 'Gerente de vendas'
                    )

            	  )

                ),
            array(
                'nome_cargo' => 'Diretor Financiero',
                'subordinados' => array(
                	array(
                		'nome_cargo' => 'Gerente contas a pagar',
                		'subordinados' => array(
                			array(
                				'nome_cargo' => 'Supervisor de pagamentos'
                			)
                		)
                	),
                	array(
                		'nome_cargo' =>  'Gerente de Compras',
                		'subordinados' => array(
                			array(
                				'nome_cargo' => 'Supervisor de suprimentos'
                			)
                		)
                	)

                )
            )

        )
    )

);

