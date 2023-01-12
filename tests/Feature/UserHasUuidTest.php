<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserHasUuidTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_created_user_has_uuid()
    {
        /*
         * Utilizzando il make() non riuscimo a raggiungere i metodi del model. Ma se lo si definisce nella factory
         * 'id' => fake()->uuid() funziona.
         */
//      $user = User::factory(1)->make();

        $user = User::factory(1)->create();

        $uuid = $user->value('id');

        $this->assertTrue(!is_null($uuid));

    }
}
