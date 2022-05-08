<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "./phpconfgs/_confg.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/pagsprincipais/finishbuy.php";

    $access_token = 'APP_USR-3680958107309655-112921-bcba49c90931f42fa0b2d96eefbe6342-489141206';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken($access_token);

    $preference = new MercadoPago\Preference();


    $item = new MercadoPago\Item();
    $item->id = '1';
    $item->title = 'Camisas de Time';
    $item->quantity = 1;
    $item->unit_price = (double)300.00;

    $preference->items = array($item);

    $preference->back_urls = array(
        "success"=>'http://projetocurso.localhost/payments/success.php',
        "failure"=>'http://projetocurso.localhost/payments/failure.php',
        "pending"=>'http://projetocurso.localhost/payments/status.php'
    );

    $preference->notification_url = 'http://projetocurso.localhost/payments/notification.php';
    $preference->external_reference = 4545;
    $preference->save();

    $link = $preference->init_point;
    
    


?>

