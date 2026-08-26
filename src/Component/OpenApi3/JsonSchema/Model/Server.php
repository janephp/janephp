<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

use Jane\Component\OpenApi3\JsonSchema\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\JsonSchema\Runtime\AdditionalPropertiesInterface;
class Server implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var array<string, ServerVariable>|null
     */
    protected $variables;
    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return array<string, ServerVariable>|null
     */
    public function getVariables() : ?iterable
    {
        return $this->variables;
    }
    /**
     * @param array<string, ServerVariable>|null $variables
     *
     * @return self
     */
    public function setVariables(?iterable $variables) : self
    {
        $this->initialized['variables'] = true;
        $this->variables = $variables;
        return $this;
    }

    public function definedProperties(): array
    {
        return ['url' => ['url', 'getUrl', 'setUrl'], 'description' => ['description', 'getDescription', 'setDescription'], 'variables' => ['variables', 'getVariables', 'setVariables']];
    }
}