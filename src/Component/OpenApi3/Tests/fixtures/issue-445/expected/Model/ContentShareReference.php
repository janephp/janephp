<?php

namespace PicturePark\API\Model;

class ContentShareReference
{
    /**
     * ID of the share.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Name of the share.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Audit information.
     *
     * @var UserAudit|null
     */
    public ?UserAudit $audit;
    /**
     * Type of the share.
     *
     * @var string
     */
    public string $shareType;
    /**
     * The email address of the user who created the share.
     *
     * @var string|null
     */
    public ?string $emailAddress;
}