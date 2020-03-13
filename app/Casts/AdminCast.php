<?php


namespace App\Casts;


use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class AdminCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return $attributes['is_admin'] == 1 ? 'ادمین' : 'کاربر';
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return [
            'is_admin' => ($value == 'ادمین')
        ];
    }
}
