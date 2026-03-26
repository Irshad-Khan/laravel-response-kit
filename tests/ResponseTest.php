<?php

use Orchestra\Testbench\TestCase;

class ResponseTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Balouch\ResponseKit\ResponseServiceProvider::class,
        ];
    }

    public function testSuccessResponse()
    {
        $response = response_success(['a' => 1]);

        $this->assertEquals(200, $response->status());
    }
}
