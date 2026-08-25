<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoPullsPullNumberMergePutResponse409 implements AdditionalPropertiesInterface
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
    protected $documentationUrl;
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
    public function getDocumentationUrl(): string
    {
        return $this->documentationUrl;
    }
    /**
     * @param string $documentationUrl
     *
     * @return self
     */
    public function setDocumentationUrl(string $documentationUrl): self
    {
        $this->initialized['documentationUrl'] = true;
        $this->documentationUrl = $documentationUrl;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage'], 'documentationUrl' => ['documentation_url', 'getDocumentationUrl', 'setDocumentationUrl']];
    }
}