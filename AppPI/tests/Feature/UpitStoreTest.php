<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Dogadaj;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpitStoreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_upit_store()
    {
        $user = User::find(1);
        $dogadaj=Dogadaj::find(3);
        $response = $this->actingAs($user)->post('/postaviupit/3/',[
            'userID'=>$user->id,
            'dogadajID'=>$dogadaj->id,
            'opis'=>'TestniUpitopis',
            
            
        ]);

        $response->assertStatus(302);
    }
}
