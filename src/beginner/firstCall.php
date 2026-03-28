<?php

class FirstCall {
    final private string $baseURL = "https://jsonplaceholder.typicode.com";
    private string $request;

    public function setRequest($value):void {
        $this->request = $value;
    }
}