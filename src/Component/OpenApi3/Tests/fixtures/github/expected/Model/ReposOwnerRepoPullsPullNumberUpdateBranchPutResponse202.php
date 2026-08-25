<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoPullsPullNumberUpdateBranchPutResponse202 implements AdditionalPropertiesInterface
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
    protected $message;
    /**
     * @var string
     */
    protected $url;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage'], 'url' => ['url', 'getUrl', 'setUrl']];
    }
}