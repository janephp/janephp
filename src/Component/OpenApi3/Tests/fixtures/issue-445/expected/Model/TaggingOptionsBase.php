<?php

namespace PicturePark\API\Model;

class TaggingOptionsBase
{
    /**
     * Override for the output format ID to tag.
     *
     * @var string|null
     */
    protected $tagOutputFormatId;
    /**
     * Override for the cache to use.
     *
     * @var string|null
     */
    protected $keywordLookupCacheName;
    /**
     * Override for the layer to assign.
     *
     * @var string|null
     */
    protected $taggingLayerId;
    /**
     * Override for the field id where found tags are stored.
     *
     * @var string|null
     */
    protected $foundTagsFieldId;
    /**
     * Override for the field id where not found tags are stored.
     *
     * @var string|null
     */
    protected $missingKeywordsFieldId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Override for the output format ID to tag.
     *
     * @return string|null
     */
    public function getTagOutputFormatId() : ?string
    {
        return $this->tagOutputFormatId;
    }
    /**
     * Override for the output format ID to tag.
     *
     * @param string|null $tagOutputFormatId
     */
    public function setTagOutputFormatId(?string $tagOutputFormatId)
    {
        $this->tagOutputFormatId = $tagOutputFormatId;
    }
    /**
     * Override for the cache to use.
     *
     * @return string|null
     */
    public function getKeywordLookupCacheName() : ?string
    {
        return $this->keywordLookupCacheName;
    }
    /**
     * Override for the cache to use.
     *
     * @param string|null $keywordLookupCacheName
     */
    public function setKeywordLookupCacheName(?string $keywordLookupCacheName)
    {
        $this->keywordLookupCacheName = $keywordLookupCacheName;
    }
    /**
     * Override for the layer to assign.
     *
     * @return string|null
     */
    public function getTaggingLayerId() : ?string
    {
        return $this->taggingLayerId;
    }
    /**
     * Override for the layer to assign.
     *
     * @param string|null $taggingLayerId
     */
    public function setTaggingLayerId(?string $taggingLayerId)
    {
        $this->taggingLayerId = $taggingLayerId;
    }
    /**
     * Override for the field id where found tags are stored.
     *
     * @return string|null
     */
    public function getFoundTagsFieldId() : ?string
    {
        return $this->foundTagsFieldId;
    }
    /**
     * Override for the field id where found tags are stored.
     *
     * @param string|null $foundTagsFieldId
     */
    public function setFoundTagsFieldId(?string $foundTagsFieldId)
    {
        $this->foundTagsFieldId = $foundTagsFieldId;
    }
    /**
     * Override for the field id where not found tags are stored.
     *
     * @return string|null
     */
    public function getMissingKeywordsFieldId() : ?string
    {
        return $this->missingKeywordsFieldId;
    }
    /**
     * Override for the field id where not found tags are stored.
     *
     * @param string|null $missingKeywordsFieldId
     */
    public function setMissingKeywordsFieldId(?string $missingKeywordsFieldId)
    {
        $this->missingKeywordsFieldId = $missingKeywordsFieldId;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;
    }
}