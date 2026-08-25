<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class ParchmentsGetLdjsonResponse200HydraSearch implements AdditionalPropertiesInterface
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
    protected $type;
    /**
     * @var string
     */
    protected $hydraTemplate;
    /**
     * @var string
     */
    protected $hydraVariableRepresentation;
    /**
     * @var list<ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem>
     */
    protected $hydraMapping;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getHydraTemplate(): string
    {
        return $this->hydraTemplate;
    }
    /**
     * @param string $hydraTemplate
     *
     * @return self
     */
    public function setHydraTemplate(string $hydraTemplate): self
    {
        $this->initialized['hydraTemplate'] = true;
        $this->hydraTemplate = $hydraTemplate;
        return $this;
    }
    /**
     * @return string
     */
    public function getHydraVariableRepresentation(): string
    {
        return $this->hydraVariableRepresentation;
    }
    /**
     * @param string $hydraVariableRepresentation
     *
     * @return self
     */
    public function setHydraVariableRepresentation(string $hydraVariableRepresentation): self
    {
        $this->initialized['hydraVariableRepresentation'] = true;
        $this->hydraVariableRepresentation = $hydraVariableRepresentation;
        return $this;
    }
    /**
     * @return list<ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem>
     */
    public function getHydraMapping(): array
    {
        return $this->hydraMapping;
    }
    /**
     * @param list<ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem> $hydraMapping
     *
     * @return self
     */
    public function setHydraMapping(array $hydraMapping): self
    {
        $this->initialized['hydraMapping'] = true;
        $this->hydraMapping = $hydraMapping;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['@type', 'getType', 'setType'], 'hydraTemplate' => ['hydra:template', 'getHydraTemplate', 'setHydraTemplate'], 'hydraVariableRepresentation' => ['hydra:variableRepresentation', 'getHydraVariableRepresentation', 'setHydraVariableRepresentation'], 'hydraMapping' => ['hydra:mapping', 'getHydraMapping', 'setHydraMapping']];
    }
}