<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();

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