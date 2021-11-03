<?php

declare(strict_types=1);

/**
 * MIT License
 * Copyright (c) 2021 Electronic Student Services @ Appalachian State University
 *
 * See LICENSE file in root directory for copyright and distribution permissions.
 *
 * @author Matthew McNaney <mcnaneym@appstate.edu>
 * @license https://opensource.org/licenses/MIT
 *
 */

namespace Dashboard\User\Resource;

class User extends \Canopy3\AbstractResource
{

    /**
     * @var bool
     */
    private bool $active = true;

    /**
     * @var DateTime
     */
    private \DateTime $created;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $internalID;

    /**
     * @var DateTime
     */
    private \DateTime $lastLogged;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var int
     */
    private int $logCount = 0;

    /**
     * @var DateTime
     */
    private \DateTime $updated;

    /**
     * @var string
     */
    private string $username;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

}
