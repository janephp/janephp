<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentDetailViewEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $contentIds;
    /**
     * @return list<string>|null
     */
    public function getContentIds(): ?array
    {
        return $this->contentIds;
    }
    /**
     * @param list<string>|null $contentIds
     *
     * @return self
     */
    public function setContentIds(?array $contentIds): self
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