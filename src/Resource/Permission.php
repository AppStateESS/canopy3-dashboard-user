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

/**
 * @table user_permission
 */
class Permission extends \Canopy3\AbstractResource
{

    /**
     * If true, this permission only works with a specific id.
     * @var bool
     */
    private bool $definitive;

    /**
     * The permission's descriptive title
     * e.g Edit the item, Delete record, etc.
     * @var string
     */
    private string $title;

    /**
     * The system's permission label (e.g. edititem, deleterecord)
     * @var string
     *
     */
    private string $label;

    /**
     * The system name
     * @var string
     */
    private string $system;

    /**
     * The system type - d (dashboard) or p (plugin)
     * @length 1
     * @var string
     */
    private string $systemType;

    public function getDefinitive()
    {
        return $this->definitive;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getSystem()
    {
        return $this->system;
    }

    public function getSystemType()
    {
        return $this->systemType;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDefinitive($definitive)
    {
        $this->definitive = $definitive;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function setSystem($system)
    {
        $this->system = $system;
    }

    public function setSystemType($systemType)
    {
        $this->systemType = $systemType;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

}
