<?php

declare(strict_types=1);

namespace App\Service;

use App\Controller\SecurityController;
use App\Entity\User;

class SecurityService
{
    /**
     * @param User|null $user
     * @return array
     */
    public function redirectAuthUsers(?User $user): array
    {
        if (in_array('ROLE_ADMIN', $user?->getRoles())) {
            return [
                'shouldRedirect' => true,
                'route'          => 'app_admin_dashboard',
            ];
        }

        if (in_array('ROLE_ADMIN', $user?->getRoles())) {
            return [
                'shouldRedirect' => true,
                'route'          => 'app_dashboard',
            ];
        }

        return [
            'shouldRedirect' => false,
            'route'          => null,
        ];
    }
}