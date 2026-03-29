<?php

use GuzzleHttp\Handler\MockHandler;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/beginner/firstCall.php";
require "vendor/autoload.php";

class FirstCallTest extends TestCase {
    private FirstCall $call;
    private $client;

    public function setUp(): void {
        $this->call = new FirstCall();
        $this->client = new GuzzleHttp\Client(["baseURI" => $this->call->getBaseURI()]);
    }

    public function testEmptyData() {
        $this->call->setRequest("/fake");
        $req = $this->call->fetchData();
        $this->assertJSON($req);
    }

    public function testInvalidJSON() {
        $this->call->setRequest("/todos");
        $req = $this->call->fetchData();
        $this->assertArrayHasKey("data", $req);
    }

    public function testNetworkFail() {
        
    }
}