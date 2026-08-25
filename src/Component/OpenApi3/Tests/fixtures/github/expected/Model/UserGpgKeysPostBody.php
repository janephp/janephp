<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class UserGpgKeysPostBody implements AdditionalPropertiesInterface
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
     * A GPG key in ASCII-armored format.
     *
     * @var string
     */
    protected $armoredPublicKey;
    /**
     * A GPG key in ASCII-armored format.
     *
     * @return string
     */
    public function getArmoredPublicKey(): string
    {
        return $this->armoredPublicKey;
    }
    /**
     * A GPG key in ASCII-armored format.
     *
     * @param string $armoredPublicKey
     *
     * @return self
     */
    public function setArmoredPublicKey(string $armoredPublicKey): self
    {
        $this->initialized['armoredPublicKey'] = true;
        $this->armoredPublicKey = $armoredPublicKey;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['armoredPublicKey' => ['armored_public_key', 'getArmoredPublicKey', 'setArmoredPublicKey']];
    }
}