<?php

namespace PicturePark\API\Model;

class DocumentHistory
{
    /**
     * @var string|null
     */
    public ?string $documentId;
    /**
     * @var int
     */
    public int $documentVersion;
    /**
     * @var string|null
     */
    public ?string $documentType;
    /**
     * @var \DateTime
     */
    public \DateTime $documentDate;
    /**
     * @var string|null
     */
    public ?string $document;
    /**
     * @var \DateTime
     */
    public \DateTime $timestamp;
    /**
     * @var UserAuditHistory|null
     */
    public ?UserAuditHistory $audit;
    /**
     * @var bool
     */
    public bool $deleted;
    /**
     * @var string
     */
    public string $action;
}