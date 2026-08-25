<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class GpgKeyEmailsItem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $email;
    /**
     * @var bool
     */
    protected $verified;
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * @return bool
     */
    public function getVerified(): bool
    {
        return $this->verified;
    }
    /**
     * @param bool $verified
     *
     * @return self
     */
    public function setVerified(bool $verified): self
    {
        $this->initialized['verified'] = true;
        $this->verified = $verified;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['email' => ['email', 'getEmail', 'setEmail'], 'verified' => ['verified', 'getVerified', 'setVerified']];
    }
}