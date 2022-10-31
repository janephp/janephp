<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecConfigsItemFile
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name represents the final filename in the filesystem.
     *
     * @var string
     */
    protected $name;
    /**
     * UID represents the file UID.
     *
     * @var string
     */
    protected $uID;
    /**
     * GID represents the file GID.
     *
     * @var string
     */
    protected $gID;
    /**
     * Mode represents the FileMode of the file.
     *
     * @var int
     */
    protected $mode;
    /**
     * Name represents the final filename in the filesystem.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name represents the final filename in the filesystem.
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
     * UID represents the file UID.
     *
     * @return string
     */
    public function getUID() : string
    {
        return $this->uID;
    }
    /**
     * UID represents the file UID.
     *
     * @param string $uID
     *
     * @return self
     */
    public function setUID(string $uID) : self
    {
        $this->initialized['uID'] = true;
        $this->uID = $uID;
        return $this;
    }
    /**
     * GID represents the file GID.
     *
     * @return string
     */
    public function getGID() : string
    {
        return $this->gID;
    }
    /**
     * GID represents the file GID.
     *
     * @param string $gID
     *
     * @return self
     */
    public function setGID(string $gID) : self
    {
        $this->initialized['gID'] = true;
        $this->gID = $gID;
        return $this;
    }
    /**
     * Mode represents the FileMode of the file.
     *
     * @return int
     */
    public function getMode() : int
    {
        return $this->mode;
    }
    /**
     * Mode represents the FileMode of the file.
     *
     * @param int $mode
     *
     * @return self
     */
    public function setMode(int $mode) : self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
}