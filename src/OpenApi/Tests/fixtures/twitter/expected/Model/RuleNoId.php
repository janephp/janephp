<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class RuleNoId
{
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
        $this->tag = $tag;
        return $this;
    }
}