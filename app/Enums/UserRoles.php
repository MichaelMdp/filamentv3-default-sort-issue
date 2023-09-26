<?php

namespace App\Enums;


use Filament\Support\Contracts\HasLabel;

enum UserRoles: string implements HasLabel
{
    //use EnumToOptions;

    case SuperAdmin = 'super_admin';
    case Admin = 'admin';
    case BackendUser = 'backend_user';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::SuperAdmin => 'super admin',
            self::Admin => 'admin',
            self::BackendUser => 'backend user',
        };
    }
}
