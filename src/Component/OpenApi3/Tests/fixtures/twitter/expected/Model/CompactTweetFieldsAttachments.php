<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CompactTweetFieldsAttachments extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @var string[]
     */
    protected $mediaKeys;
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @var string[]
     */
    protected $pollIds;
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @return string[]
     */
    public function getMediaKeys() : array
    {
        return $this->mediaKeys;
    }
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @param string[] $mediaKeys
     *
     * @return self
     */
    public function setMediaKeys(array $mediaKeys) : self
    {
        $this->initialized['mediaKeys'] = true;
        $this->mediaKeys = $mediaKeys;
        return $this;
    }
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @return string[]
     */
    public function getPollIds() : array
    {
        return $this->pollIds;
    }
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @param string[] $pollIds
     *
     * @return self
     */
    public function setPollIds(array $pollIds) : self
    {
        $this->initialized['pollIds'] = true;
        $this->pollIds = $pollIds;
        return $this;
    }
}