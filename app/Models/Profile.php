<?php

namespace App\Models;

class Profile
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $image;

    public static function Get ($firstName, $lastName, $email, $image): Profile
    {
        $profile = new Profile();

        $profile->email = $email;
        $profile->lastName = $lastName;
        $profile->image = $image;
        $profile->firstName = $firstName;

        return $profile;
    }

}
