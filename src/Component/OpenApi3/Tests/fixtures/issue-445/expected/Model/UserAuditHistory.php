<?php

namespace PicturePark\API\Model;

class UserAuditHistory
{
    /**
     * @var \DateTime
     */
    public \DateTime $modificationDate;
    /**
     * @var string|null
     */
    public ?string $modifiedByUser;
}