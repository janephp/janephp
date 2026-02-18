<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupAuditId
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
     * the identifier of the SCG user group
     *
     * @var string
     */
    protected $id;
    /**
     * the identifier of the SCG user group
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * the identifier of the SCG user group
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}