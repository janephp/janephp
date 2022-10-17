<?php

namespace Github\Model;

class ScimV2OrganizationsOrgUsersPostBodyEmailsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @var bool
     */
    protected $primary;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrimary() : bool
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary) : self
    {
        $this->primary = $primary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}