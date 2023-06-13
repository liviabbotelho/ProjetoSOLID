<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Sem SRP</h3>';

print_r($carrinho1->exibirItens());
echo 'Valor total= ' . $carrinho1->exibirValorTotal();
/*
$carrinho1->adicionarItem('Bicicleta', 750);
$carrinho1->adicionarItem('Geladeira', 1999.99);
$carrinho1->adicionarItem('Celular', 3200);
echo "</br>";
*/
print_r($carrinho1->exibirItens());
echo 'Valor total recalculado= ' . $carrinho1->exibirValorTotal();

echo "</br>";
echo 'status: '.$carrinho1->exibirStatus();
echo "</br>";

if($carrinho1->confirmarPedido()){
   echo 'pedido realizado com sucesso';
}
else{
   echo 'Erro na confirmação do pedido';
}
echo "</br>";
$carrinho1->confirmarPedido();
echo "</br>";
echo 'status: '.$carrinho1->exibirStatus();