<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class GitCommitTree implements AdditionalPropertiesInterface
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
     * SHA for the commit
     *
     * @var string
     */
    protected $sha;
    /**
     * @var string
     */
    protected $url;
    /**
     * SHA for the commit
     *
     * @return string
     */
    public function getSha(): string
    {
        return $this->sha;
    }
    /**
     * SHA for the commit
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha): self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
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
        return ['sha' => ['sha', 'getSha', 'setSha'], 'url' => ['url', 'getUrl', 'setUrl']];
    }
}