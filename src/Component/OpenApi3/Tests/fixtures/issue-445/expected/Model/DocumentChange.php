<?php

namespace PicturePark\API\Model;

class DocumentChange
{
    /**
     * @var string|null
     */
    public ?string $documentName;
    /**
     * @var string|null
     */
    public ?string $documentId;
    /**
     * @var int
     */
    public int $version;
    /**
     * @var string|null
     */
    public ?string $action;
    /**
     * @var \DateTime
     */
    public \DateTime $timeStamp;
}