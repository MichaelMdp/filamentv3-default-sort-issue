<?php

namespace App\Casts;

use App\Enums\UserRoles;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class RolesCast implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        // Our value is the contents of a JSON field. So expect a string. We
        // first need to convert that to an array.
        $data = json_decode($value, true) ?? [];
        $roles = [];
        foreach ($data as $item) {
            if ($enum = UserRoles::tryFrom($item)) {
                $roles[] = $enum;
            }
        }
        return $roles;
    }

    public function set($model, $key, $value, $attributes)
    {
        return json_encode(array_filter(
            $value,
            // We can expect the value to be an array of either the string
            // representations of the enum cases, or the enums themselves.
            // Conditionally cast accordingly.
            static fn (UserRoles|string $userRolesEnum) => $userRolesEnum instanceof UserRoles ? $userRolesEnum->value : $userRolesEnum
        ));
    }
}
