<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentFieldsBatchUpdateFilterRequest extends MetadataValuesChangeRequestBase implements AdditionalPropertiesInterface
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
     * Filters the contents on which the change commands must be applied.
     *
     * @var ContentFilterRequest
     */
    protected $filterRequest;
    /**
     * Filters the contents on which the change commands must be applied.
     *
     * @return ContentFilterRequest
     */
    public function getFilterRequest(): ContentFilterRequest
    {
        return $this->filterRequest;
    }
    /**
     * Filters the contents on which the change commands must be applied.
     *
     * @param ContentFilterRequest $filterRequest
     *
     * @return self
     */
    public function setFilterRequest(ContentFilterRequest $filterRequest): self
    {
        $this->initialized['filterRequest'] = true;
        $this->filterRequest = $filterRequest;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['filterRequest' => ['filterRequest', 'getFilterRequest', 'setFilterRequest']];
    }
}