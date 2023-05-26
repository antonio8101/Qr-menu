<?php

namespace Tests\Feature\Api\Menu;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;
use Throwable;

class MenuTest extends TestCase {

    use RefreshDatabase;

    /**
     * @throws Throwable
     */
    public function test_menu_create(): void {

        $createRoute = '/api/menu/create';
        $getRoute = '/api/menu/';
        $nameOfTheMenuToCreate = 'test';
        $menuNameProp = Menu::NAME;

        Passport::actingAs(
            User::factory()->create(),
            // define scope
        );

        $createResponse = $this
            ->post($createRoute, [
                'name_menu' => $nameOfTheMenuToCreate
            ]);

        $createResponse->assertStatus(204);
        $createResponse->assertNoContent();

        $getResponse = $this->get($getRoute);

        $getResponse->assertStatus(200);
        $getResult = json_decode($getResponse->getContent());

        $this->assertTrue(is_array($getResult), "Next query should return an array");
        $this->assertTrue(in_array($nameOfTheMenuToCreate, array_map(fn ($x) => $x->$menuNameProp, $getResult)), "The result should contain our name key");
    }

    /**
     * @throws Throwable
     */
    public function test_menu_get(): void {

        $createRoute = '/api/menu/create';
        $getRoute = '/api/menu/';
        $nameOfTheMenuToCreate = 'test';
        $menuNameProp = Menu::NAME;

        Passport::actingAs(
            User::factory()->create(),
        // define scope
        );

        $createResponse = $this
            ->post($createRoute, [
                'name_menu' => $nameOfTheMenuToCreate
            ]);

        $createResponse->assertStatus(204);
        $createResponse->assertNoContent();

        $getResponse = $this->get($getRoute);

        $getResponse->assertStatus(200);
        $getResult = json_decode($getResponse->getContent());

        $this->assertTrue(is_array($getResult), "Next query should return an array");
        $this->assertTrue(in_array($nameOfTheMenuToCreate, array_map(fn ($x) => $x->$menuNameProp, $getResult)), "The result should contain our name key");
    }

}
