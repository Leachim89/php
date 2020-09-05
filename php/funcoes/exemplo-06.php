<?php

//função recursiva- chama a si própria
//cada item de array é separado por vírgulas

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            
            //Início: diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Início: diretor comercial
                    'nome_cargo'=>'Gerente de vendas'
                )
                 //Termino: diretor comercial    
            ),
            //Termino: diretor comercial    
            //Início: diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Início: gerente de contas
                    'nome_cargo'=>'Gerente de Contas',
                    'subordinados'=>array(
                        //Início: supervisor
                        'nome_cargo'=>'Supervisor'

                    )
                    //Termino: supervisor
                    ),
                //Termino: gerente de contas
                //Inicio: Gerente de compras
                array(
                    'nome_cargo'=>'Gerente de compras',
                    'subordinados'=>array(
                        'nome_cargo'=>'Supervisor de suprimentos'

                    )
                )

                //Termino: gerente de compras
            )
            //Termino: diretor financeiro
        )
    )
);


function exibe($cargos){

    $html = '<ul>';

    foreach($cargos as $cargo){

        $html .="<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);
        }

        $html .="</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);

?>