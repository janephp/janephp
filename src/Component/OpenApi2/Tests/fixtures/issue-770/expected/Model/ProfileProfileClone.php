<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProfileClone
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
     * original name
     *
     * @var string
     */
    protected $oldName;
    /**
     * original name
     *
     * @var string
     */
    protected $oldId;
    /**
     * Id for new profile
     *
     * @var string
     */
    protected $newName;
    /**
     * name for new profile
     *
     * @var string
     */
    protected $newId;
    /**
     * original name
     *
     * @return string
     */
    public function getOldName(): string
    {
        return $this->oldName;
    }
    /**
     * original name
     *
     * @param string $oldName
     *
     * @return self
     */
    public function setOldName(string $oldName): self
    {
        $this->initialized['oldName'] = true;
        $this->oldName = $oldName;
        return $this;
    }
    /**
     * original name
     *
     * @return string
     */
    public function getOldId(): string
    {
        return $this->oldId;
    }
    /**
     * original name
     *
     * @param string $oldId
     *
     * @return self
     */
    public function setOldId(string $oldId): self
    {
        $this->initialized['oldId'] = true;
        $this->oldId = $oldId;
        return $this;
    }
    /**
     * Id for new profile
     *
     * @return string
     */
    public function getNewName(): string
    {
        return $this->newName;
    }
    /**
     * Id for new profile
     *
     * @param string $newName
     *
     * @return self
     */
    public function setNewName(string $newName): self
    {
        $this->initialized['newName'] = true;
        $this->newName = $newName;
        return $this;
    }
    /**
     * name for new profile
     *
     * @return string
     */
    public function getNewId(): string
    {
        return $this->newId;
    }
    /**
     * name for new profile
     *
     * @param string $newId
     *
     * @return self
     */
    public function setNewId(string $newId): self
    {
        $this->initialized['newId'] = true;
        $this->newId = $newId;
        return $this;
    }
}