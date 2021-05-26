<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_right_credentials()
    {
        $response=$this->post('/login', [
            'email'=>'ilucic@veleri.hr',
            'password'=>'lozinka123',
        ]);
        $response->assertRedirect('/home');
        

    }
}
