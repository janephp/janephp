<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationZdImport
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
     * @var string
     */
    protected $user;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $ip;
    /**
     * @var list<string>
     */
    protected $apMacList;
    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getApMacList(): array
    {
        return $this->apMacList;
    }
    /**
     * @param list<string> $apMacList
     *
     * @return self
     */
    public function setApMacList(array $apMacList): self
    {
        $this->initialized['apMacList'] = true;
        $this->apMacList = $apMacList;
        return $this;
    }
}