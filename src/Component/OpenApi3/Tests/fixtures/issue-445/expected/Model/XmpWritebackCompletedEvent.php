<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class XmpWritebackCompletedEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
    protected $outputDocId;
    /**
     * @return string|null
     */
    public function getOutputDocId(): ?string
    {
        return $this->outputDocId;
    }
    /**
     * @param string|null $outputDocId
     *
     * @return self
     */
    public function setOutputDocId(?string $outputDocId): self
    {
        $this->initialized['outputDocId'] = true;
        $this->outputDocId = $outputDocId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['outputDocId' => ['outputDocId', 'getOutputDocId', 'setOutputDocId']];
    }
}