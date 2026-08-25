<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SchemaTagboxFilterLookupNamedCacheConfiguration extends NamedCacheConfigurationBase implements AdditionalPropertiesInterface
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
     * The layer id.
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     * The layer id.
     *
     * @return string|null
     */
    public function getSchemaId(): ?string
    {
        return $this->schemaId;
    }
    /**
     * The layer id.
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId): self
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['schemaId' => ['schemaId', 'getSchemaId', 'setSchemaId']];
    }
}