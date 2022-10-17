<?php

namespace Github\Model;

class ScimUserName extends \ArrayObject
{
    /**
     * 
     *
     * @var string|null
     */
    protected $givenName;
    /**
     * 
     *
     * @var string|null
     */
    protected $familyName;
    /**
     * 
     *
     * @return string|null
     */
    public function getGivenName() : ?string
    {
        return $this->givenName;
    }
    /**
     * 
     *
     * @param string|null $givenName
     *
     * @return self
     */
    public function setGivenName(?string $givenName) : self
    {
        $this->givenName = $givenName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFamilyName() : ?string
    {
        return $this->familyName;
    }
    /**
     * 
     *
     * @param string|null $familyName
     *
     * @return self
     */
    public function setFamilyName(?string $familyName) : self
    {
        $this->familyName = $familyName;
        return $this;
    }
}