<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyLwapp2scg
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
     * policy of the lwapp
     *
     * @var string
     */
    protected $policy;
    /**
     * pasvMaxPort of the lwapp
     *
     * @var int
     */
    protected $pasvMaxPort;
    /**
     * pasvMinPort of the lwapp
     *
     * @var int
     */
    protected $pasvMinPort;
    /**
     * accessPoint List  of the lwapp
     *
     * @var list<string>
     */
    protected $apList;
    /**
     * natIpTranslation of the lwapp
     *
     * @var bool
     */
    protected $natIpTranslation;
    /**
     * policy of the lwapp
     *
     * @return string
     */
    public function getPolicy(): string
    {
        return $this->policy;
    }
    /**
     * policy of the lwapp
     *
     * @param string $policy
     *
     * @return self
     */
    public function setPolicy(string $policy): self
    {
        $this->initialized['policy'] = true;
        $this->policy = $policy;
        return $this;
    }
    /**
     * pasvMaxPort of the lwapp
     *
     * @return int
     */
    public function getPasvMaxPort(): int
    {
        return $this->pasvMaxPort;
    }
    /**
     * pasvMaxPort of the lwapp
     *
     * @param int $pasvMaxPort
     *
     * @return self
     */
    public function setPasvMaxPort(int $pasvMaxPort): self
    {
        $this->initialized['pasvMaxPort'] = true;
        $this->pasvMaxPort = $pasvMaxPort;
        return $this;
    }
    /**
     * pasvMinPort of the lwapp
     *
     * @return int
     */
    public function getPasvMinPort(): int
    {
        return $this->pasvMinPort;
    }
    /**
     * pasvMinPort of the lwapp
     *
     * @param int $pasvMinPort
     *
     * @return self
     */
    public function setPasvMinPort(int $pasvMinPort): self
    {
        $this->initialized['pasvMinPort'] = true;
        $this->pasvMinPort = $pasvMinPort;
        return $this;
    }
    /**
     * accessPoint List  of the lwapp
     *
     * @return list<string>
     */
    public function getApList(): array
    {
        return $this->apList;
    }
    /**
     * accessPoint List  of the lwapp
     *
     * @param list<string> $apList
     *
     * @return self
     */
    public function setApList(array $apList): self
    {
        $this->initialized['apList'] = true;
        $this->apList = $apList;
        return $this;
    }
    /**
     * natIpTranslation of the lwapp
     *
     * @return bool
     */
    public function getNatIpTranslation(): bool
    {
        return $this->natIpTranslation;
    }
    /**
     * natIpTranslation of the lwapp
     *
     * @param bool $natIpTranslation
     *
     * @return self
     */
    public function setNatIpTranslation(bool $natIpTranslation): self
    {
        $this->initialized['natIpTranslation'] = true;
        $this->natIpTranslation = $natIpTranslation;
        return $this;
    }
}