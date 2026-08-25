<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class CompactTweetFieldsAttachments implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @var list<string>
     */
    protected $mediaKeys;
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @var list<string>
     */
    protected $pollIds;
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @return list<string>
     */
    public function getMediaKeys(): array
    {
        return $this->mediaKeys;
    }
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @param list<string> $mediaKeys
     *
     * @return self
     */
    public function setMediaKeys(array $mediaKeys): self
    {
        $this->initialized['mediaKeys'] = true;
        $this->mediaKeys = $mediaKeys;
        return $this;
    }
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @return list<string>
     */
    public function getPollIds(): array
    {
        return $this->pollIds;
    }
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @param list<string> $pollIds
     *
     * @return self
     */
    public function setPollIds(array $pollIds): self
    {
        $this->initialized['pollIds'] = true;
        $this->pollIds = $pollIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['mediaKeys' => ['media_keys', 'getMediaKeys', 'setMediaKeys'], 'pollIds' => ['poll_ids', 'getPollIds', 'setPollIds']];
    }
}