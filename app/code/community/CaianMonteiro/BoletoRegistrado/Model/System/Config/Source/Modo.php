<?php

class CaianMonteiro_BoletoRegistrado_Model_System_Config_Source_Modo
{
    public function toOptionArray()
    {

        return array(
            array(
                'value' => 'teste',
                'label' => 'Teste',
            ),
            array(
                'value' => 'producao',
                'label' => 'Produção',
            ),
        );
    }
}