<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Request\User;

use BitBag\SyliusVueStorefrontPlugin\Command\User\ChangePassword;
use Symfony\Component\HttpFoundation\Request;

final class ChangePasswordRequest
{
    /** @var string|null */
    private $token;

    /** @var string|null */
    private $currentPassword;

    /** @var string|null */
    private $newPassword;

    public function __construct(Request $request)
    {
        $this->token = $request->query->get('token');
        $this->currentPassword = $request->request->get('currentPassword');
        $this->newPassword = $request->request->get('newPassword');
    }

    public function getCommand(): ChangePassword
    {
        return new ChangePassword($this->token, $this->currentPassword, $this->newPassword);
    }
}