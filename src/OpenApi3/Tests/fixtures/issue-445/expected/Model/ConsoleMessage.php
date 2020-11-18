<?php

namespace PicturePark\API\Model;

class ConsoleMessage
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
     * @var string|null
     */
    protected $command;
    /**
     * 
     *
     * @var TupleOfStringAndString[]|null
     */
    protected $arguments;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetQueue;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getCommand() : ?string
    {
        return $this->command;
    }
    /**
     * 
     *
     * @param string|null $command
     *
     * @return self
     */
    public function setCommand(?string $command) : self
    {
        $this->command = $command;
        return $this;
    }
    /**
     * 
     *
     * @return TupleOfStringAndString[]|null
     */
    public function getArguments() : ?array
    {
        return $this->arguments;
    }
    /**
     * 
     *
     * @param TupleOfStringAndString[]|null $arguments
     *
     * @return self
     */
    public function setArguments(?array $arguments) : self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetQueue() : ?string
    {
        return $this->targetQueue;
    }
    /**
     * 
     *
     * @param string|null $targetQueue
     *
     * @return self
     */
    public function setTargetQueue(?string $targetQueue) : self
    {
        $this->targetQueue = $targetQueue;
        return $this;
    }
}