<?php

namespace App\Services\Contracts;

interface PassportClientCreatorContract
{
    public function create(string $id, string $secret, string $callbackUrl, string | null $name = null) : void;
}
