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

//      $mockFalse = '802fez76-0e1a-4774-86e3-083883c6cb04';

        $this->assertEquals(true, preg_match('^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}^', $uuid));

    }
}
