<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Schema
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $stringProperty;
    /**
     * 
     *
     * @var int
     */
    protected $integerProperty;
    /**
     * 
     *
     * @var float
     */
    protected $floatProperty;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $arrayProperty;
    /**
     * 
     *
     * @var array<string, string>
     */
    protected $mapProperty;
    /**
     * 
     *
     * @var SchemaObjectProperty
     */
    protected $objectProperty;
    /**
     * 
     *
     * @var Schema
     */
    protected $objectRefProperty;
    /**
     * 
     *
     * @return string
     */
    public function getStringProperty() : string
    {
        return $this->stringProperty;
    }
    /**
     * 
     *
     * @param string $stringProperty
     *
     * @return self
     */
    public function setStringProperty(string $stringProperty) : self
    {
        $this->initialized['stringProperty'] = true;
        $this->stringProperty = $stringProperty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIntegerProperty() : int
    {
        return $this->integerProperty;
    }
    /**
     * 
     *
     * @param int $integerProperty
     *
     * @return self
     */
    public function setIntegerProperty(int $integerProperty) : self
    {
        $this->initialized['integerProperty'] = true;
        $this->integerProperty = $integerProperty;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFloatProperty() : float
    {
        return $this->floatProperty;
    }
    /**
     * 
     *
     * @param float $floatProperty
     *
     * @return self
     */
    public function setFloatProperty(float $floatProperty) : self
    {
        $this->initialized['floatProperty'] = true;
        $this->floatProperty = $floatProperty;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getArrayProperty() : array
    {
        return $this->arrayProperty;
    }
    /**
     * 
     *
     * @param mixed[] $arrayProperty
     *
     * @return self
     */
    public function setArrayProperty(array $arrayProperty) : self
    {
        $this->initialized['arrayProperty'] = true;
        $this->arrayProperty = $arrayProperty;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>
     */
    public function getMapProperty() : iterable
    {
        return $this->mapProperty;
    }
    /**
     * 
     *
     * @param array<string, string> $mapProperty
     *
     * @return self
     */
    public function setMapProperty(iterable $mapProperty) : self
    {
        $this->initialized['mapProperty'] = true;
        $this->mapProperty = $mapProperty;
        return $this;
    }
    /**
     * 
     *
     * @return SchemaObjectProperty
     */
    public function getObjectProperty() : SchemaObjectProperty
    {
        return $this->objectProperty;
    }
    /**
     * 
     *
     * @param SchemaObjectProperty $objectProperty
     *
     * @return self
     */
    public function setObjectProperty(SchemaObjectProperty $objectProperty) : self
    {
        $this->initialized['objectProperty'] = true;
        $this->objectProperty = $objectProperty;
        return $this;
    }
    /**
     * 
     *
     * @return Schema
     */
    public function getObjectRefProperty() : Schema
    {
        return $this->objectRefProperty;
    }
    /**
     * 
     *
     * @param Schema $objectRefProperty
     *
     * @return self
     */
    public function setObjectRefProperty(Schema $objectRefProperty) : self
    {
        $this->initialized['objectRefProperty'] = true;
        $this->objectRefProperty = $objectRefProperty;
        return $this;
    }
}