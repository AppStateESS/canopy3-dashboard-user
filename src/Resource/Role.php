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
 */

namespace Dashboard\User\Resource;

use VariableType\TextOnly;

class Role extends \Canopy3\AbstractResource
{

    /**
     * @var string
     */
    private string $title;

    public function setTitle(string $title)
    {
        $this->title = TextOnly::filter($title);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

}
