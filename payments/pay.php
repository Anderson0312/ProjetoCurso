<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "./phpconfgs/_confg.php";

    $access_token = 'TEST-3680958107309655-112921-7f26e8a5d9c8d64c4828ebd338ebcf8e-489141206';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken($access_token);

    $preference = new MercadoPago\Preference();


    $item = new MercadoPago\Item();
    $item->title = 'Camisa de Time';
    $item->quantity = 1;
    $item->init_price = (double)54.00;
    $preference->items = array($item);

    $preference->back_urls = array(
        'success'=>'http://projetocurso.localhost/payments/success.php',
        'failure'=>'http://projetocurso.localhost/payments/failure.php',
        'pending'=>'http://projetocurso.localhost/payments/status.php'
    );

    $preference->notification_url = 'http://projetocurso.localhost/payments/notification.php';
    $preference->external_reference = 4545;
    $preference->save();

    $link = $preference->init_point;
    echo $link

?>

<h1>pagar <?php  ?></h1>