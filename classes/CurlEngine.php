<?php

namespace DigikalaCurl;

class CurlEngine {
    private $Url;
    private $Body;
    private $CurlHandler;

    public function __construct(string $url = "https://www.digikala.com/product/dkp-90825")
    {
        $this->Url = $url;
        $this->CurlHandler = curl_init($this->Url);
        curl_setopt($this->CurlHandler, CURLOPT_VERBOSE, true);
        curl_setopt($this->CurlHandler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->CurlHandler, CURLOPT_SSL_VERIFYPEER, false);
    }

    public function Exec()
    {
        $this->Body = curl_exec($this->CurlHandler);
    }

    public function GetStatusCode() : int 
    {
        return (int)curl_getinfo($this->CurlHandler, CURLINFO_HTTP_CODE);
    }

    public function GetBody() : string 
    {
        return $this->Body;
    }
}