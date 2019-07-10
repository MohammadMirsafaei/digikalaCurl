<?php

require_once './vendor/autoload.php';

use DigikalaCurl\CurlEngine;
use DigikalaCurl\DigikalaPage;

if(isset($_GET['url']) && $_GET['url'] != "")
{
    $CE = new CurlEngine($_GET['url']);
}
else
{
    $CE = new CurlEngine();
}
$CE->Exec();
$DP = new DigikalaPage($CE->GetBody());
?>

<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اطلاعات محصول <?= $DP->GetProductName();?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="center">
        <div class="card" style="width: 18rem;">
            <img src="<?= $DP->GetProductImg();?>" class="card-img-top">
            <div class="card-body">
                <h4><?= $DP->GetProductName();?></h4>
                <button class="btn btn-block btn-primary"><?= $DP->GetProductPrice();?></button>
            </div>
        </div>
    </div>
    </div>
</body>

</html>