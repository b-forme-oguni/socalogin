<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{

    public function TwitterRedirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function TwitterCallback($provider)
    {
        // OAuthユーザー情報を取得
        $social_user = Socialite::driver($provider)->user();
        $user = $this->first_or_create_social_user($provider, $social_user->id, $social_user->name, $social_user->avatar);

        // Laravel 標準の Auth でログイン
        Auth::login($user);

        return redirect('/home');
    }

    protected function first_or_create_social_user(
        string $service_name,
        string $social_id,
        string $social_name,
        string $social_avatar
    ) {
        $user = null;
        $user = User::where("{$service_name}_id", '=', $social_id)->first();
        if ($user === null) {
            $user = new User();
            $user->fill([
                "{$service_name}_id" => $social_id,
                'name'               => $social_name,
                'avatar'             => $social_avatar,
            ]);
            $user->save();
            return $user;
        } else {
            return $user;
        }
    }
}
