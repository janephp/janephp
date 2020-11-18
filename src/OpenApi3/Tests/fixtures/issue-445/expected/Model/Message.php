<?php

namespace PicturePark\API\Model;

class Message
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $retries;
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var bool
     */
    protected $deduplicate;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRetries() : int
    {
        return $this->retries;
    }
    /**
     * 
     *
     * @param int $retries
     *
     * @return self
     */
    public function setRetries(int $retries) : self
    {
        $this->retries = $retries;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeduplicate() : bool
    {
        return $this->deduplicate;
    }
    /**
     * 
     *
     * @param bool $deduplicate
     *
     * @return self
     */
    public function setDeduplicate(bool $deduplicate) : self
    {
        $this->deduplicate = $deduplicate;
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
}