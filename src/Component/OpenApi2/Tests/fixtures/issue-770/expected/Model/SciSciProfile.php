<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SciSciProfile
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
     * UUID of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $id;
    /**
     * Priority of the SCI profile for SZ/SCI interface
     *
     * @var int
     */
    protected $sciPriority;
    /**
     * Profile name of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $sciProfile;
    /**
     * SCI system UUID of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $sciSystemId;
    /**
     * SCI server host of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $sciServerHost;
    /**
     * SCI server port of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $sciServerPort;
    /**
     * SCI user name of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $sciUser;
    /**
     * SCI password of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $sciPassword;
    /**
     * UUID of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * UUID of the SCI profile for SZ/SCI interface
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
     * Priority of the SCI profile for SZ/SCI interface
     *
     * @return int
     */
    public function getSciPriority(): int
    {
        return $this->sciPriority;
    }
    /**
     * Priority of the SCI profile for SZ/SCI interface
     *
     * @param int $sciPriority
     *
     * @return self
     */
    public function setSciPriority(int $sciPriority): self
    {
        $this->initialized['sciPriority'] = true;
        $this->sciPriority = $sciPriority;
        return $this;
    }
    /**
     * Profile name of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getSciProfile(): string
    {
        return $this->sciProfile;
    }
    /**
     * Profile name of the SCI profile for SZ/SCI interface
     *
     * @param string $sciProfile
     *
     * @return self
     */
    public function setSciProfile(string $sciProfile): self
    {
        $this->initialized['sciProfile'] = true;
        $this->sciProfile = $sciProfile;
        return $this;
    }
    /**
     * SCI system UUID of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getSciSystemId(): string
    {
        return $this->sciSystemId;
    }
    /**
     * SCI system UUID of the SCI profile for SZ/SCI interface
     *
     * @param string $sciSystemId
     *
     * @return self
     */
    public function setSciSystemId(string $sciSystemId): self
    {
        $this->initialized['sciSystemId'] = true;
        $this->sciSystemId = $sciSystemId;
        return $this;
    }
    /**
     * SCI server host of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getSciServerHost(): string
    {
        return $this->sciServerHost;
    }
    /**
     * SCI server host of the SCI profile for SZ/SCI interface
     *
     * @param string $sciServerHost
     *
     * @return self
     */
    public function setSciServerHost(string $sciServerHost): self
    {
        $this->initialized['sciServerHost'] = true;
        $this->sciServerHost = $sciServerHost;
        return $this;
    }
    /**
     * SCI server port of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getSciServerPort(): string
    {
        return $this->sciServerPort;
    }
    /**
     * SCI server port of the SCI profile for SZ/SCI interface
     *
     * @param string $sciServerPort
     *
     * @return self
     */
    public function setSciServerPort(string $sciServerPort): self
    {
        $this->initialized['sciServerPort'] = true;
        $this->sciServerPort = $sciServerPort;
        return $this;
    }
    /**
     * SCI user name of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getSciUser(): string
    {
        return $this->sciUser;
    }
    /**
     * SCI user name of the SCI profile for SZ/SCI interface
     *
     * @param string $sciUser
     *
     * @return self
     */
    public function setSciUser(string $sciUser): self
    {
        $this->initialized['sciUser'] = true;
        $this->sciUser = $sciUser;
        return $this;
    }
    /**
     * SCI password of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getSciPassword(): string
    {
        return $this->sciPassword;
    }
    /**
     * SCI password of the SCI profile for SZ/SCI interface
     *
     * @param string $sciPassword
     *
     * @return self
     */
    public function setSciPassword(string $sciPassword): self
    {
        $this->initialized['sciPassword'] = true;
        $this->sciPassword = $sciPassword;
        return $this;
    }
}