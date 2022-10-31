<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Cat extends Pet
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
     * The measured skill for hunting
     *
     * @var string
     */
    protected $huntingSkill = 'lazy';
    /**
     * The measured skill for hunting
     *
     * @return string
     */
    public function getHuntingSkill() : string
    {
        return $this->huntingSkill;
    }
    /**
     * The measured skill for hunting
     *
     * @param string $huntingSkill
     *
     * @return self
     */
    public function setHuntingSkill(string $huntingSkill) : self
    {
        $this->initialized['huntingSkill'] = true;
        $this->huntingSkill = $huntingSkill;
        return $this;
    }
}