<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ConfigurationChangeEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $documentType;
    /**
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * @param string|null $documentType
     *
     * @return self
     */
    public function setDocumentType(?string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['documentType' => ['documentType', 'getDocumentType', 'setDocumentType']];
    }
}