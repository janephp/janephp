<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseSshKeysExisting implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var SshKeys
     */
    protected $sshKey;
    /**
     * @return SshKeys
     */
    public function getSshKey(): SshKeys
    {
        return $this->sshKey;
    }
    /**
     * @param SshKeys $sshKey
     *
     * @return self
     */
    public function setSshKey(SshKeys $sshKey): self
    {
        $this->initialized['sshKey'] = true;
        $this->sshKey = $sshKey;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sshKey' => ['ssh_key', 'getSshKey', 'setSshKey']];
    }
}