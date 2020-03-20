<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetResponse200HydraSearch
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $hydraTemplate;
    /**
     * 
     *
     * @var string
     */
    protected $hydraVariableRepresentation;
    /**
     * 
     *
     * @var ParchmentsGetResponse200HydraSearchHydraMappingItem[]
     */
    protected $hydraMapping;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydraTemplate() : string
    {
        return $this->hydraTemplate;
    }
    /**
     * 
     *
     * @param string $hydraTemplate
     *
     * @return self
     */
    public function setHydraTemplate(string $hydraTemplate) : self
    {
        $this->hydraTemplate = $hydraTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydraVariableRepresentation() : string
    {
        return $this->hydraVariableRepresentation;
    }
    /**
     * 
     *
     * @param string $hydraVariableRepresentation
     *
     * @return self
     */
    public function setHydraVariableRepresentation(string $hydraVariableRepresentation) : self
    {
        $this->hydraVariableRepresentation = $hydraVariableRepresentation;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetResponse200HydraSearchHydraMappingItem[]
     */
    public function getHydraMapping() : array
    {
        return $this->hydraMapping;
    }
    /**
     * 
     *
     * @param ParchmentsGetResponse200HydraSearchHydraMappingItem[] $hydraMapping
     *
     * @return self
     */
    public function setHydraMapping(array $hydraMapping) : self
    {
        $this->hydraMapping = $hydraMapping;
        return $this;
    }
}