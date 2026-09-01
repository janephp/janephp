<?php

namespace PicturePark\API\Model;

class TaggingOptionsBase
{
    /**
     * Override for the output format ID to tag.
     *
     * @var string|null
     */
    public ?string $tagOutputFormatId;
    /**
     * Override for the cache to use.
     *
     * @var string|null
     */
    public ?string $keywordLookupCacheName;
    /**
     * Override for the layer to assign.
     *
     * @var string|null
     */
    public ?string $taggingLayerId;
    /**
     * Override for the field id where found tags are stored.
     *
     * @var string|null
     */
    public ?string $foundTagsFieldId;
    /**
     * Override for the field id where not found tags are stored.
     *
     * @var string|null
     */
    public ?string $missingKeywordsFieldId;
    /**
     * @var string
     */
    public string $kind;
}