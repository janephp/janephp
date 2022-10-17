<?php

namespace Github\Model;

class ScimUserGroupsItem extends \ArrayObject
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
     * @var string
     */
    protected $display;
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
     * @return string
     */
    public function getDisplay() : string
    {
        return $this->display;
    }
    /**
     * 
     *
     * @param string $display
     *
     * @return self
     */
    public function setDisplay(string $display) : self
    {
        $this->display = $display;
        return $this;
    }
}