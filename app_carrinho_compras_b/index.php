<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(2.99);

$item2->setDescricao('Lâmpada');
$item2->setValor(8.50);

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo '<h4>Pedido</h4>';

echo '<pre>';
print_r($pedido);
echo '<pre>';

echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '<pre>';

echo '<h4>Valor do pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
   $total += $item->getValor();
}
echo $total;

echo '<h4>Carrinho está válido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

echo '<h4>Status do pedido:</h4>';
echo $pedido->getStatus();

echo '<h4>Confirmar pedido</h4>';
echo $pedido->confirmar();

echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
   echo EmailService::dispararEmail();
}


/*
print_r($carrinho1->exibirItens());
echo 'Valor total= ' . $carrinho1->exibirValorTotal();

$carrinho1->adicionarItem('Bicicleta', 750);
$carrinho1->adicionarItem('Geladeira', 1999.99);
$carrinho1->adicionarItem('Celular', 3200);
echo "</br>";

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
*/