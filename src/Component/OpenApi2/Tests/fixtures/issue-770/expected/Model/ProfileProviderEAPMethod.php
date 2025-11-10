<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderEAPMethod
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
     * EAP method type
     *
     * @var string
     */
    protected $type;
    /**
     * EAP method auth settings
     *
     * @var list<ProfileProviderEAPAuthSetting>
     */
    protected $authSettings;
    /**
     * EAP method type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * EAP method type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * EAP method auth settings
     *
     * @return list<ProfileProviderEAPAuthSetting>
     */
    public function getAuthSettings(): array
    {
        return $this->authSettings;
    }
    /**
     * EAP method auth settings
     *
     * @param list<ProfileProviderEAPAuthSetting> $authSettings
     *
     * @return self
     */
    public function setAuthSettings(array $authSettings): self
    {
        $this->initialized['authSettings'] = true;
        $this->authSettings = $authSettings;
        return $this;
    }
}