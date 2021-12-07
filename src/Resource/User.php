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

use Canopy3\Traits\TrackedTrait;

/**
 * @table user_user
 */
class User extends \Canopy3\AbstractResource
{

    use TrackedTrait;

    /**
     * @var bool
     */
    private bool $active = true;

    /**
     * Contains a hash that must match the config/deity.php to give
     * the user full rights.
     * @var string
     */
    private string $deity;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     * @length 50
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $internalId;

    /**
     * @var DateTime
     */
    private \DateTime $lastLogged;

    /**
     * @var string
     * @length 50
     */
    private string $lastName;

    /**
     * @var int
     */
    private int $logCount = 0;

    /**
     * @var string
     */
    private string $username;

    public function getActive(): bool
    {
        return $this->active;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getInternalId(): string
    {
        return $this->internalId;
    }

    public function getLastLogged(string $format = null): string
    {
        return $this->lastLogged->format($format ?? 'c');
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getLogCount(): int
    {
        return $this->logCount;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function setInternalId(string $internalId)
    {
        $this->internalID = $internalId;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

}
