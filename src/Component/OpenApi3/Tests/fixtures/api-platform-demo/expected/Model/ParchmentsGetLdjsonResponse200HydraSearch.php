<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetLdjsonResponse200HydraSearch extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * @var ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem[]
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
        $this->initialized['type'] = true;
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
        $this->initialized['hydraTemplate'] = true;
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
        $this->initialized['hydraVariableRepresentation'] = true;
        $this->hydraVariableRepresentation = $hydraVariableRepresentation;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem[]
     */
    public function getHydraMapping() : array
    {
        return $this->hydraMapping;
    }
    /**
     * 
     *
     * @param ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem[] $hydraMapping
     *
     * @return self
     */
    public function setHydraMapping(array $hydraMapping) : self
    {
        $this->initialized['hydraMapping'] = true;
        $this->hydraMapping = $hydraMapping;
        return $this;
    }
}