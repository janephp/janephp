<?php

namespace PicturePark\API\Model;

class UserAudit
{
    /**
     * The date on which the document was created.
     *
     * @var \DateTime
     */
    public \DateTime $creationDate;
    /**
     * The last date on which the document was modified.
     *
     * @var \DateTime
     */
    public \DateTime $modificationDate;
    /**
     * ID of the user who created the document.
     *
     * @var string|null
     */
    public ?string $createdByUser;
    /**
     * ID of the last user who modified the document.
     *
     * @var string|null
     */
    public ?string $modifiedByUser;
}