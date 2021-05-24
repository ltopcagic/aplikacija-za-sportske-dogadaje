<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_registracija()
    {
        $response=$this->post('/register', [
            'ime'=>'KorisnikTestIme',
            'prezime'=>'KorisnikTestPrezime',
            'email'=>'testmail@gmail.com',
            'password'=>'lozinkatest',
            'password_confirmation'=>'lozinkatest',
        ]);
        $response->assertStatus(302);
    }
}
