<?php

namespace Tests\Feature;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/home');

        $response->assertSeeText('home');
    }

    public function testAboutPage()
    {
        $response = $this->get('/about'); 
        $response->assertSeeText('about') ; 
        
    }
}
