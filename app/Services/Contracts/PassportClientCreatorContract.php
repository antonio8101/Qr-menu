<?php

namespace App\Services\Contracts;

interface PassportClientCreatorContract
{
    /**
     * Creates a new oauth passport client
     *
     * @param string $id
     * @param string $secret
     * @param string $callbackUrl
     * @param string|null $name
     *
     * @return void
     */
    public function create(string $id, string $secret, string $callbackUrl, string | null $name = null) : void;


    /**
     * Create or update passport client
     *
     * @param string $id
     * @param string $secret
     * @param string $callbackUrl
     * @param string|null $name
     *
     * @return void
     */
    public function upsert(string $id, string $secret, string $callbackUrl, string | null $name = null) : void;
}
