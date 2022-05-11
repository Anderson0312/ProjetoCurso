<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_confg.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/pagsprincipais/finishbuy.php";

    $access_token = 'APP_USR-3680958107309655-112921-bcba49c90931f42fa0b2d96eefbe6342-489141206';

    $totalpedidos = $_SESSION['totalcarrinho']['valorfinal'];
    
    require_once $_SERVER['DOCUMENT_ROOT'] . 'projetocurso/lib/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken($access_token);

    $preference = new MercadoPago\Preference();


    $item = new MercadoPago\Item();
    $item->id = '1';
    $item->title = 'Camisas de Time';
    $item->quantity = 1;
    $item->unit_price = (double)$totalpedidos;

    $preference->items = array($item);

    $preference->back_urls = array(
        "success"=>'/projetocurso/payments/success.php',
        "failure"=>'/projetocurso/payments/failure.php',
        "pending"=>'/projetocurso/payments/status.php'
    );

    $preference->notification_url = '/projetocurso/payments/notification.php';
    $preference->external_reference = 4545;
    $preference->save();

    $link = $preference->init_point;
    
    

?>

