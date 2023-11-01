<?php

namespace Github\Model;

class UserGpgKeysPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
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
    public function getArmoredPublicKey() : string
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
    public function setArmoredPublicKey(string $armoredPublicKey) : self
    {
        $this->initialized['armoredPublicKey'] = true;
        $this->armoredPublicKey = $armoredPublicKey;
        return $this;
    }
}