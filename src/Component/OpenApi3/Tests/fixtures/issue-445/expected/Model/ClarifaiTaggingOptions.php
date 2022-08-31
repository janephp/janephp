<?php

namespace PicturePark\API\Model;

class ClarifaiTaggingOptions extends TaggingOptionsBase
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
     * Override for the model to use
     *
     * @var string|null
     */
    protected $model;
    /**
     * Override for the language to use
     *
     * @var string|null
     */
    protected $language;
    /**
     * Minimum value a concept must have to be considered
     *
     * @var string|null
     */
    protected $minimumValue;
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
     * Override for the model to use
     *
     * @return string|null
     */
    public function getModel() : ?string
    {
        return $this->model;
    }
    /**
     * Override for the model to use
     *
     * @param string|null $model
     *
     * @return self
     */
    public function setModel(?string $model) : self
    {
        $this->model = $model;
        return $this;
    }
    /**
     * Override for the language to use
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * Override for the language to use
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * Minimum value a concept must have to be considered
     *
     * @return string|null
     */
    public function getMinimumValue() : ?string
    {
        return $this->minimumValue;
    }
    /**
     * Minimum value a concept must have to be considered
     *
     * @param string|null $minimumValue
     *
     * @return self
     */
    public function setMinimumValue(?string $minimumValue) : self
    {
        $this->minimumValue = $minimumValue;
        return $this;
    }
}