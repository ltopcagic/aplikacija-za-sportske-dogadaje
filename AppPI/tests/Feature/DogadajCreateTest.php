<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DogadajCreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dogadajCreate()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->post('/novidogadaj',[
            'userID'=>$user->id,
            'naziv'=>'TestniDogadaj',
            'opis'=>'TestniDogadajopis',
            'grad'=>'Pula',
            'date'=>'2021-06-20',
            'vrijeme_pocetka'=>'15:00:00',
            'potrebna_oprema'=>'testna oprema',
            'broj_ljudi'=>'10',
        ]);

        $response->assertStatus(302);
    }
}
