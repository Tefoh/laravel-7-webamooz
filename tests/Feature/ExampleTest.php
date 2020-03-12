<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Http::fake([
            'dummy.*' => Http::response([], 500)
        ]);

        $res = Http::post('http://dummy.restapiexample.com/api/v1/create', [
            'name' => 'tofiq'
        ]);

        dd($res->status());
    }
}
