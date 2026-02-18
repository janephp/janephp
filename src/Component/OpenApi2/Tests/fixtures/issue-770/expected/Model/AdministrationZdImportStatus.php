<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationZdImportStatus
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
    protected $message;
    /**
     * @var string
     */
    protected $details;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var int
     */
    protected $progress;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }
    /**
     * @param string $details
     *
     * @return self
     */
    public function setDetails(string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * @return int
     */
    public function getProgress(): int
    {
        return $this->progress;
    }
    /**
     * @param int $progress
     *
     * @return self
     */
    public function setProgress(int $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
}