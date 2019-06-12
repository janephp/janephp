<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Cat extends Pet
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $petType;
    /**
     * The measured skill for hunting
     *
     * @var string
     */
    protected $huntingSkill = 'lazy';
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPetType() : ?string
    {
        return $this->petType;
    }
    /**
     * 
     *
     * @param string|null $petType
     *
     * @return self
     */
    public function setPetType(?string $petType) : self
    {
        $this->petType = $petType;
        return $this;
    }
    /**
     * The measured skill for hunting
     *
     * @return string|null
     */
    public function getHuntingSkill() : ?string
    {
        return $this->huntingSkill;
    }
    /**
     * The measured skill for hunting
     *
     * @param string|null $huntingSkill
     *
     * @return self
     */
    public function setHuntingSkill(?string $huntingSkill) : self
    {
        $this->huntingSkill = $huntingSkill;
        return $this;
    }
}