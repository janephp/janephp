<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class CustomerChangeEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * Lifecycle
     *
     * @var string
     */
    protected $lifeCycle;
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
    /**
     * Lifecycle
     *
     * @return string
     */
    public function getLifeCycle(): string
    {
        return $this->lifeCycle;
    }
    /**
     * Lifecycle
     *
     * @param string $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle(string $lifeCycle): self
    {
        $this->initialized['lifeCycle'] = true;
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['documentType' => ['documentType', 'getDocumentType', 'setDocumentType'], 'lifeCycle' => ['lifeCycle', 'getLifeCycle', 'setLifeCycle']];
    }
}