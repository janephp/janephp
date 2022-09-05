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
     */
    public function setId(?string $id)
    {
        $this->id = $id;
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
     */
    public function setRetries(int $retries)
    {
        $this->retries = $retries;
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
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
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
     */
    public function setDeduplicate(bool $deduplicate)
    {
        $this->deduplicate = $deduplicate;
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