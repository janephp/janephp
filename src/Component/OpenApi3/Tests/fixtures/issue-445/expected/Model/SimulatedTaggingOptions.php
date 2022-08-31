<?php

namespace PicturePark\API\Model;

class SimulatedTaggingOptions extends TaggingOptionsBase
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
     * Number of keywords to assign.
     *
     * @var string|null
     */
    protected $numberOfKeywords;
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
     *
     * @return self
     */
    public function setTagOutputFormatId(?string $tagOutputFormatId) : self
    {
        $this->tagOutputFormatId = $tagOutputFormatId;
        return $this;
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
     *
     * @return self
     */
    public function setKeywordLookupCacheName(?string $keywordLookupCacheName) : self
    {
        $this->keywordLookupCacheName = $keywordLookupCacheName;
        return $this;
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
     *
     * @return self
     */
    public function setTaggingLayerId(?string $taggingLayerId) : self
    {
        $this->taggingLayerId = $taggingLayerId;
        return $this;
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
     *
     * @return self
     */
    public function setFoundTagsFieldId(?string $foundTagsFieldId) : self
    {
        $this->foundTagsFieldId = $foundTagsFieldId;
        return $this;
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
     *
     * @return self
     */
    public function setMissingKeywordsFieldId(?string $missingKeywordsFieldId) : self
    {
        $this->missingKeywordsFieldId = $missingKeywordsFieldId;
        return $this;
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
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Number of keywords to assign.
     *
     * @return string|null
     */
    public function getNumberOfKeywords() : ?string
    {
        return $this->numberOfKeywords;
    }
    /**
     * Number of keywords to assign.
     *
     * @param string|null $numberOfKeywords
     *
     * @return self
     */
    public function setNumberOfKeywords(?string $numberOfKeywords) : self
    {
        $this->numberOfKeywords = $numberOfKeywords;
        return $this;
    }
}