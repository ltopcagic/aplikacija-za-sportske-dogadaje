<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Dogadaj;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserOnDogadajStoreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_UserOnDogadaj_store()
    {
        $user = User::find(1);
        $dogadaj=Dogadaj::find(3);
        $response = $this->actingAs($user)->post('/dogadaji/3/',[
            'userID'=>$user->id,
            'dogadajID'=>$dogadaj->id,         
            
        ]);

        $response->assertStatus(200);
    }
}
