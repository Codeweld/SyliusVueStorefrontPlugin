<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Model\Request\User;

class ExistingUser
{
    /** @var string */
    public $email;

    /** @var string */
    public $firstname;

    /** @var string */
    public $lastname;

    /** @var UserAddress[] */
    public $addresses;

    public function addresses(): array
    {
        return $this->addresses;
    }
}
