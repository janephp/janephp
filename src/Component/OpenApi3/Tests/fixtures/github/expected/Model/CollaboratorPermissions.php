<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class CollaboratorPermissions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var bool
     */
    protected $pull;
    /**
     * @var bool
     */
    protected $push;
    /**
     * @var bool
     */
    protected $admin;
    /**
     * @return bool
     */
    public function getPull(): bool
    {
        return $this->pull;
    }
    /**
     * @param bool $pull
     *
     * @return self
     */
    public function setPull(bool $pull): self
    {
        $this->initialized['pull'] = true;
        $this->pull = $pull;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPush(): bool
    {
        return $this->push;
    }
    /**
     * @param bool $push
     *
     * @return self
     */
    public function setPush(bool $push): self
    {
        $this->initialized['push'] = true;
        $this->push = $push;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAdmin(): bool
    {
        return $this->admin;
    }
    /**
     * @param bool $admin
     *
     * @return self
     */
    public function setAdmin(bool $admin): self
    {
        $this->initialized['admin'] = true;
        $this->admin = $admin;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['pull' => ['pull', 'getPull', 'setPull'], 'push' => ['push', 'getPush', 'setPush'], 'admin' => ['admin', 'getAdmin', 'setAdmin']];
    }
}