<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEventDetail
{
    /**
     * @var string|null
     */
    public ?string $documentId;
    /**
     * @var string|null
     */
    public ?string $documentType;
    /**
     * @var list<string>|null
     */
    public ?array $ruleIds;
}