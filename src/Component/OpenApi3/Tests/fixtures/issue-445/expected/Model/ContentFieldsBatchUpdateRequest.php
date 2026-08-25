<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentFieldsBatchUpdateRequest extends MetadataValuesChangeRequestBase implements AdditionalPropertiesInterface
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
     * The IDs of the contents whose fields need to be updated.
     *
     * @var list<string>
     */
    protected $contentIds;
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @return list<string>
     */
    public function getContentIds(): array
    {
        return $this->contentIds;
    }
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @param list<string> $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds): self
    {
        $this->initialized['contentIds'] = true;
        $this->contentIds = $contentIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contentIds' => ['contentIds', 'getContentIds', 'setContentIds']];
    }
}