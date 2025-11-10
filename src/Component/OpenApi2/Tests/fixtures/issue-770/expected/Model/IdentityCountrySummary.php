<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityCountrySummary
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Short name of country
     *
     * @var string
     */
    protected $countryShortName;
    /**
     * Full name of country
     *
     * @var string
     */
    protected $countryName;
    /**
     * Short name of country
     *
     * @return string
     */
    public function getCountryShortName(): string
    {
        return $this->countryShortName;
    }
    /**
     * Short name of country
     *
     * @param string $countryShortName
     *
     * @return self
     */
    public function setCountryShortName(string $countryShortName): self
    {
        $this->initialized['countryShortName'] = true;
        $this->countryShortName = $countryShortName;
        return $this;
    }
    /**
     * Full name of country
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }
    /**
     * Full name of country
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
}