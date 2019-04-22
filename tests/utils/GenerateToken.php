<?php
namespace Tests\Utils;

use Tymon\JWTAuth\Facades\JWTAuth;

trait GenerateToken {
    public function getToken() {
        $user = [
            'email' => 'admin@gmail.com',
            'password' => 'admin'
        ];
        /* get authorization token */
        $token = JWTAuth::attempt([
            'email' => $user['email'],
            'password' => $user['password']
        ]);

        return $token;
    }
}