<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function get(): JsonResponse
    {
        $user = User::where('id', Auth::id())->first();

        $userAttributes = $user->getAttributes();

        $userProfile = Profile::Get(
            $userAttributes['first_name'],
            $userAttributes['last_name'],
            $userAttributes['email'],
            $userAttributes['image']);

        return new JsonResponse($userProfile, 200);
    }

}
