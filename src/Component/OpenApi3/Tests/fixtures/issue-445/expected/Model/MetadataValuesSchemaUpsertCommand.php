<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataValuesSchemaUpsertCommand extends MetadataValuesChangeCommandBase implements AdditionalPropertiesInterface
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
     * An object containing the metadata values to add / update.
     *
     * @var array<string, mixed>
     */
    protected $value;
    /**
     * An object containing the metadata values to add / update.
     *
     * @return array<string, mixed>
     */
    public function getValue(): iterable
    {
        return $this->value;
    }
    /**
     * An object containing the metadata values to add / update.
     *
     * @param array<string, mixed> $value
     *
     * @return self
     */
    public function setValue(iterable $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['value' => ['value', 'getValue', 'setValue']];
    }
}