<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function testFamousApiRoute()
    {
        $response = $this->get(route('api'));
        $response->assertStatus(200);
    }

    public function testValidateUsernameRoute()
    {
        $response = $this->get(route('validate-username'));
        $response->assertStatus(200);
    }

    public function testHomePageRoute()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(302);
    }

    public function testSendMailRoute()
    {
        $response = $this->get(route('send-mail'));
        $response->assertStatus(500);
    }

    public function testRegisterRoute()
    {
        $response = $this->post(route('register'));
        $response->assertStatus(500);
    }
}
