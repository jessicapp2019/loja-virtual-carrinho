<?php

$smarty = new Template();

$carrinho = new Carrinho();

$smarty->assing('PRO', $carrinho ->GetCarrinho());

echo '<pre>';
var_dump($carrinho->GetCarrinho())
echo '</pre>'; 

$smarty->display('carrrinho.tpl');

?>