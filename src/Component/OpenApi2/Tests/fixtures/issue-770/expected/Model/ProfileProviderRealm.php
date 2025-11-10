<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderRealm
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
     * Name of realm
     *
     * @var string
     */
    protected $name;
    /**
     * Encoding
     *
     * @var string
     */
    protected $encoding;
    /**
     * EAP methods
     *
     * @var list<ProfileProviderEAPMethod>
     */
    protected $eapMethods;
    /**
     * Name of realm
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of realm
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
     * Encoding
     *
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }
    /**
     * Encoding
     *
     * @param string $encoding
     *
     * @return self
     */
    public function setEncoding(string $encoding): self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;
        return $this;
    }
    /**
     * EAP methods
     *
     * @return list<ProfileProviderEAPMethod>
     */
    public function getEapMethods(): array
    {
        return $this->eapMethods;
    }
    /**
     * EAP methods
     *
     * @param list<ProfileProviderEAPMethod> $eapMethods
     *
     * @return self
     */
    public function setEapMethods(array $eapMethods): self
    {
        $this->initialized['eapMethods'] = true;
        $this->eapMethods = $eapMethods;
        return $this;
    }
}