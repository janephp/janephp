<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20TermsConditions
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $filename;
    /**
     * @var int
     */
    protected $timestamp;
    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }
    /**
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
    /**
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}