<?php

class Carrinho{
    private $total_valor, $total_peso, $itens_= array();


    function GetCarrinho($sessao=NULL){

        $i = 1; $sub = 1.00 ; $peso 0;
        foreach ($_SESSION['PRO'] as $lista){
            $this->itens[$i] = array(
                'pro_id' => $lista['ID']
                'pro_nome'  => $lista['NOME'] ,  
                'pro_valor'   => $lista['VALOR']  , // 1.000,99
                'pro_valor_us'   => $lista['VALOR_US']  , // 1000.99
                'pro_peso' => $lista['pro_PESO'] , 
                'pro_qtd' => $lista['pro_QTD'] ,
                'pro_img' => $lista['IMG'] ,  
                'pro_link' => $lista['LINK'] , 
                'pro_subtotal' => Sistema::MoedaBR($sub) , 
                'pro_subtotal_us' => $sub 
                
              
            );

            $i++
        }

        is(count($this->itens) > 0){
            return $this->itens;
        }else{
            echo '<h4 class="alert alert-ganger"> Não há produtos no carrinho </h4>'
        }

    }
}


?>