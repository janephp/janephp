<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Station
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
     * Unique identifier for the station.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the station
     *
     * @var string
     */
    protected $name;
    /**
     * The address of the station.
     *
     * @var string
     */
    protected $address;
    /**
     * The country code of the station.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The timezone of the station in the [IANA Time Zone Database format](https://www.iana.org/time-zones).
     *
     * @var string
     */
    protected $timezone;
    /**
     * Unique identifier for the station.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the station.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the station
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the station
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The address of the station.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * The address of the station.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The country code of the station.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The country code of the station.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The timezone of the station in the [IANA Time Zone Database format](https://www.iana.org/time-zones).
     *
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }
    /**
     * The timezone of the station in the [IANA Time Zone Database format](https://www.iana.org/time-zones).
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
}