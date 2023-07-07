<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use PHPUnit\Framework\Constraint\Constraint;
use Tests\TestCase;

class ProfileApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_fail_401()
    {
        $response = $this->get('/api/profile', [
            'Accept'=> 'application/json'
        ]);

        $response->assertStatus(401);
    }
    public function test_get_profile()
    {
        $user = User::factory()->create();

        $userAttributes = $user->getAttributes();

        Passport::actingAs(
            $user,
        // define scope
        );
        $response = $this->get('/api/profile', [
            'Accept'=> 'application/json'
        ]);

        $response->assertStatus(200);

        $getResult = json_decode($response->getContent());

        $this->assertTrue(!is_null($getResult->firstName));
        $this->assertTrue($getResult->firstName == $userAttributes['first_name']);
        $this->assertTrue(!is_null($getResult->lastName));
        $this->assertTrue(!is_null($getResult->image));
        $this->assertTrue(!is_null($getResult->email));
    }
}
