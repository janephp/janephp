<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessRuleScript extends BusinessRule implements AdditionalPropertiesInterface
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
     * Script
     *
     * @var string|null
     */
    protected $script;
    /**
     * Script
     *
     * @return string|null
     */
    public function getScript(): ?string
    {
        return $this->script;
    }
    /**
     * Script
     *
     * @param string|null $script
     *
     * @return self
     */
    public function setScript(?string $script): self
    {
        $this->initialized['script'] = true;
        $this->script = $script;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['script' => ['script', 'getScript', 'setScript']];
    }
}