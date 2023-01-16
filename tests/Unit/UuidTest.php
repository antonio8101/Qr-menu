<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;


class UuidTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_valid_uuid() :void
    {
        $targetClass = new User();

        $uuid = $targetClass->newUniqueId();

        $this->assertEquals(true, preg_match('^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}^', $uuid));
    }
}
