<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class UserWithheld extends \ArrayObject
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
     * Provides a list of countries where this content is not available.
     *
     * @var string[]
     */
    protected $countryCodes;
    /**
     * Indicates that the content being withheld is a `user`.
     *
     * @var string
     */
    protected $scope;
    /**
     * Provides a list of countries where this content is not available.
     *
     * @return string[]
     */
    public function getCountryCodes() : array
    {
        return $this->countryCodes;
    }
    /**
     * Provides a list of countries where this content is not available.
     *
     * @param string[] $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(array $countryCodes) : self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * Indicates that the content being withheld is a `user`.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * Indicates that the content being withheld is a `user`.
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
}