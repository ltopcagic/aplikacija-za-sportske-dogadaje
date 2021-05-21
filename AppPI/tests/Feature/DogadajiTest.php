<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DogadajiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /** @test  */
    public function pregled_dogadaja()
    {
       $user = User::find(1);
       $response = $this->actingAs($user)->get('/dogadaji');
        $response->assertStatus(200);
    }
}
