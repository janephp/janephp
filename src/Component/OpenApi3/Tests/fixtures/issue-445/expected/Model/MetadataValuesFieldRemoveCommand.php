<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataValuesFieldRemoveCommand extends MetadataValuesChangeCommandBase implements AdditionalPropertiesInterface
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
     * The path of the field to be removed within the specified schema (i.e. remove the street from the address of a person: fieldPath = "address.streetName", schemaId = "PersonLayer")
     *
     * @var string
     */
    protected $fieldPath;
    /**
     * The path of the field to be removed within the specified schema (i.e. remove the street from the address of a person: fieldPath = "address.streetName", schemaId = "PersonLayer")
     *
     * @return string
     */
    public function getFieldPath(): string
    {
        return $this->fieldPath;
    }
    /**
     * The path of the field to be removed within the specified schema (i.e. remove the street from the address of a person: fieldPath = "address.streetName", schemaId = "PersonLayer")
     *
     * @param string $fieldPath
     *
     * @return self
     */
    public function setFieldPath(string $fieldPath): self
    {
        $this->initialized['fieldPath'] = true;
        $this->fieldPath = $fieldPath;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['fieldPath' => ['fieldPath', 'getFieldPath', 'setFieldPath']];
    }
}