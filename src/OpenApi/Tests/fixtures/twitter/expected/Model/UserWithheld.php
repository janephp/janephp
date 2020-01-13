<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class UserWithheld
{
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
        $this->scope = $scope;
        return $this;
    }
}