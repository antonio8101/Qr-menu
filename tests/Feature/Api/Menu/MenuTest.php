<?php

namespace Tests\Feature\Api\Menu;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class MenuTest extends TestCase {

    use RefreshDatabase;

    public function test_menu_create(): void {

        Passport::actingAs(
            User::factory()->create(),
            ['create-servers']
        );

        $response = $this
            ->post('/api/menu/create', [
                'name_menu' => 'test'
            ]);

        $response->assertStatus(200);
    }
}
