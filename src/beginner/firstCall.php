<?php

class FirstCall {
    private string $baseURI = "https://jsonplaceholder.typicode.com";
    private string $request;

    public function getBaseURI():string {
        return $this->baseURI;
    }

    public function setRequest($value):void {
        if ($value)
        $this->request = $value;
    }

    public function getRequest():string {
        return $this->request;
    }

    public function fetchData() {
        $curl = curl_init();
        $url = $this->getBaseURI() . $this->getRequest();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        if (!$res) {
            return "{'response':'error: no data', 'data':'{}'}";
        } 
        return "{'response':'success', 'data':'{$res}'}";
    }
}