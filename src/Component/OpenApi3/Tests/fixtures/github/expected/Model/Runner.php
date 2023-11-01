<?php

namespace Github\Model;

class Runner extends \ArrayObject
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
     * The id of the runner.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the runner.
     *
     * @var string
     */
    protected $name;
    /**
     * The Operating System of the runner.
     *
     * @var string
     */
    protected $os;
    /**
     * The status of the runner.
     *
     * @var string
     */
    protected $status;
    /**
     * The id of the runner.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The id of the runner.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the runner.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the runner.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The Operating System of the runner.
     *
     * @return string
     */
    public function getOs() : string
    {
        return $this->os;
    }
    /**
     * The Operating System of the runner.
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os) : self
    {
        $this->initialized['os'] = true;
        $this->os = $os;
        return $this;
    }
    /**
     * The status of the runner.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the runner.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}