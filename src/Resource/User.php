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

class User
{

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $username;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var DateTime
     */
    private \DateTime $lastLogged;

    /**
     * @var string
     */
    private string $internalID;

    /**
     * @var int
     */
    private int $logCount = 0;

    /**
     * @var DateTime
     */
    private \DateTime $created;

    /**
     * @var DateTime
     */
    private \DateTime $updated;

    /**
     * @var bool
     */
    private bool $active;

    public function __construct()
    {

    }

}
