<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class BranchWithProtectionLinks implements AdditionalPropertiesInterface
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
    protected $html;
    /**
     * @var string
     */
    protected $self;
    /**
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }
    /**
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html): self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
    /**
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }
    /**
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['html' => ['html', 'getHtml', 'setHtml'], 'self' => ['self', 'getSelf', 'setSelf']];
    }
}