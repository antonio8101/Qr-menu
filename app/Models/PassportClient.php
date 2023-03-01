<?php

namespace App\Models;

use Laravel\Passport\Client as BasePassportClient;

class PassportClient  extends BasePassportClient{

    public function skipsAuthorization() {

        $this->getKey();

        return true;
    }
}
