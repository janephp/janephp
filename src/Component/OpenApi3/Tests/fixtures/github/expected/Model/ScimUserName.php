<?php

namespace Github\Model;

class ScimUserName extends \ArrayObject
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
        $this->initialized['givenName'] = true;
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
        $this->initialized['familyName'] = true;
        $this->familyName = $familyName;
        return $this;
    }
}