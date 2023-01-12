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
    public function user_id_must_be_uuid(): void
    {
        $user = User::factory(1)->create();

        $uuid = $user->value('id');

        $this->assertTrue(!is_null($uuid));
        $this->assertIsString($uuid);
    }
}
