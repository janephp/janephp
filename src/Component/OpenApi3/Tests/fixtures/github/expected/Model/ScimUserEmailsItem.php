<?php

namespace Github\Model;

class ScimUserEmailsItem
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
}