<?php

use GuzzleHttp\Handler\MockHandler;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/beginner/firstCall.php";

class FirstCallTest extends TestCase {
    private FirstCall $call;
    private MockHandler $mock;

    public function setUp(): void {
        $this->call = new FirstCall();
        $this->mock = new MockHandler();
    }

    public function testEmptyData() {
        $req = $this->call->getData("fakeData");
        $this->assertJSON($req);
    }

    public function testInvalidJSON() {
        $req = $this->call->getData("posts");
        $this->assertArrayHasKey("data", $req);
    }

    public function testNetworkFail() {
        $req = $this->call->$data = $form->getData();
    }
}