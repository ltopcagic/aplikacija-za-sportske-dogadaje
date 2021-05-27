<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FalseLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_wrong_credentials()
    {
        $response=$this->post('/login', [
            'email'=>'ilucic1@veleri.hr',
            'password'=>'lozinka123',
        ]);
        $response->assertSessionHasNoErrors();
        

    }
}
