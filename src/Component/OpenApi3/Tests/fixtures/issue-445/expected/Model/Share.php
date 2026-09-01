<?php

namespace PicturePark\API\Model;

class Share
{
    /**
     * Share ID.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of share.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * List of shared content IDs.
     *
     * @var list<string>
     */
    public array $contentIds;
    /**
     * Audit information.
     *
     * @var UserAudit
     */
    public UserAudit $audit;
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $expirationDate;
    /**
     * Type of share.
     *
     * @var string
     */
    public string $shareType;
    /**
     * Share is readonly if the current user is not the creator but only the recipient.
     *
     * @var bool
     */
    public bool $isReadOnly;
}