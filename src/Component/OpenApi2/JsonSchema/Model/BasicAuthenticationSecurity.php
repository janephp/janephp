<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

use Jane\Component\OpenApi2\JsonSchema\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi2\JsonSchema\Runtime\AdditionalPropertiesInterface;
class BasicAuthenticationSecurity implements AdditionalPropertiesInterface
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
    protected $type;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
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

    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'description' => ['description', 'getDescription', 'setDescription']];
    }
}
