<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentSchemaCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
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
     * Content schema id to match on.
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     * Content schema id to match on.
     *
     * @return string|null
     */
    public function getSchemaId(): ?string
    {
        return $this->schemaId;
    }
    /**
     * Content schema id to match on.
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