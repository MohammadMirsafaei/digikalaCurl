<?php
namespace DigikalaCurl;

use SimpleHtmlDom\simple_html_dom;

class DigikalaPage {
    private $ProductName;
    private $ProductImg; // Url of image
    private $ProductPrice;
    private $DOMObj;

    public function __construct(string $body)
    {
        $this->DOMObj = new simple_html_dom();
        $this->DOMObj->load($body);
        $this->ProductName = $this->DOMObj->find('h1[class=c-product__title]',0)->plaintext;
        $this->ProductImg = $this->DOMObj->find('img[class=js-gallery-img]',0)->getAttribute('data-src');
        $this->ProductPrice = $this->DOMObj->find('div[class=c-product__seller-price-raw]',0)->plaintext;
    }


    // Getters
    public function GetProductName() : string
    {
        return $this->ProductName;
    }

    public function GetProductImg() : string
    {
        return $this->ProductImg;
    }

    public function GetProductPrice() : string
    {
        return $this->ProductPrice;
    }
}