<?php

namespace App\Presenters\User;

use Illuminate\Http\Resources\Json\Resource;

class UserLoginPresenter extends Resource
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        $return = [
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => $this->name,
        ];
        return $return;
    }
}