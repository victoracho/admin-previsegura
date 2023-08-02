<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Mail\ResetPasswordMail;
use App\Mail\ResetPasswordLink;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;
use Laravel\Fortify\Fortify;
use App\Models\User;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);

        ResetPassword::toMailUsing(function ($notifiable, $token) {
            $emailResetUrl = url(route('password.reset', [
                'token' => $token,
                'email' => $notifiable->email,
            ], false));
            return (new ResetPasswordLink)
                ->subject('Reestablecimiento de clave')
                ->to($notifiable->email)
                ->with(['url' => $emailResetUrl])
                ->markdown('emails.password');
        });
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });

        // Fortify::loginView(function () {
        //     return Inertia::render('Auth/Login');
        // });
        //
        Fortify::resetPasswordView(function ($request) {
            $req = (object)[];
            $req->email = $request->email;
            $user = User::where('email', $request->email)->first();
            $req->role = $user->firstRoleName();
            return Inertia::render('Auth/ResetPassword', ['req' => $req]);
        });
        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
