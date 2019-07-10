<?php

require_once './vendor/autoload.php';

use DigikalaCurl\CurlEngine;
use DigikalaCurl\DigikalaPage;

if(isset($_GET['url']))
{
    $CE = new CurlEngine();
    $CE->Exec();
    $DP = new DigikalaPage($CE->GetBody());
    echo "
        <html>
            <head>
                <title>".$DP->GetProductName()."</title>
            </head>
            <body>
                <h1>".$DP->GetProductName()."</h1>
                <h4>".$DP->GetProductPrice()."</h4>
                <img src='".$DP->GetProductImg()."'>
            </body>
        </html>

    ";

}
else
{

}