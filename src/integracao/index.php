<?php
    include ("pedidos.php");
    $pedidos=new pedidos();
    $pedidos->exibePedidos();

    include ("produtos.php");
    $produtos=new produtos();
    $produtos->exibeProdutos();