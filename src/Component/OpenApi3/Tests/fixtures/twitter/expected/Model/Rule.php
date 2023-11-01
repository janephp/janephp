<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Rule extends \ArrayObject
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
     * The filterlang value of the rule.
     *
     * @var string
     */
    protected $value;
    /**
     * A tag meant for the labeling of user provided rules.
     *
     * @var string
     */
    protected $tag;
    /**
     * Unique identifier of this rule.
     *
     * @var string
     */
    protected $id;
    /**
     * The filterlang value of the rule.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The filterlang value of the rule.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * A tag meant for the labeling of user provided rules.
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * A tag meant for the labeling of user provided rules.
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    /**
     * Unique identifier of this rule.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of this rule.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}