<?php

namespace PicturePark\API\Model;

class ConsoleMessage extends Message
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
     * 
     *
     * @var string|null
     */
    protected $command;
    /**
     * 
     *
     * @var list<TupleOfStringAndString>|null
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
        $this->initialized['command'] = true;
        $this->command = $command;
        return $this;
    }
    /**
     * 
     *
     * @return list<TupleOfStringAndString>|null
     */
    public function getArguments() : ?array
    {
        return $this->arguments;
    }
    /**
     * 
     *
     * @param list<TupleOfStringAndString>|null $arguments
     *
     * @return self
     */
    public function setArguments(?array $arguments) : self
    {
        $this->initialized['arguments'] = true;
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
        $this->initialized['targetQueue'] = true;
        $this->targetQueue = $targetQueue;
        return $this;
    }
}