<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareDataEmbed extends ShareDataBase implements AdditionalPropertiesInterface
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
     * Token for the embed share.
     *
     * @var string
     */
    protected $token;
    /**
     * Token for the embed share.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * Token for the embed share.
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['token' => ['token', 'getToken', 'setToken']];
    }
}