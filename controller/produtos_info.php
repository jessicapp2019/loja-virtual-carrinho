
<?php 

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);

$image = new ProdutosImages()
$produtos ->GetImagesPRO(Rotas::$pag[1]);


$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());
$smarty->assign('IMAGES', $image->GetItens());


$smarty->display('produtos_info.tpl');



 ?>

