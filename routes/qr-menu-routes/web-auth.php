<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Str;

Route::middleware('guest')
    ->prefix('auth')
    ->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::get('logout', [AuthenticatedSessionController::class, 'logout'])
     ->name('web.logout');

Route::middleware('auth')
    ->prefix('auth')
    ->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

// TODO: this is to be refined
//Route::prefix('auth')->get( '/callback', function ( Request $request ) {
//
//    return response([
//        'auth_code' => $request->code
//    ]);
//} );

Route::get('/login', function (Request $request) {
    $request->session()->put('state', $state = Str::random(40));

    $server = env( 'APP_URL' );

    // TODO: this is to be refined
    $client = DB::table( 'oauth_clients' )
                ->where( 'name', 'SPA' )
                ->first();

    $client_id    = $client->id;
    $redirect_uri = $client->redirect;

    $query = http_build_query([
        'client_id' => $client_id,
        'redirect_uri' => $redirect_uri,
        'response_type' => 'code',
        'scope' => '',
        'state' => $state,
        'prompt' => 'login'
    ]);

    return redirect($server . '/oauth/authorize?' . $query);
});
