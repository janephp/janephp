<?php

namespace PicturePark\API\Model;

class MetadataStatus
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The schema ids (of type Content or Layer) for which the contents are outdated and need to be updated.
     *
     * @var list<string>|null
     */
    protected $contentOrLayerSchemaIds;
    /**
     * The schema ids (of type List) for which the the list items are outdated and need to be updated.
     *
     * @var list<string>|null
     */
    protected $listSchemaIds;
    /**
     * The global state of the Contents and ListItems compared to the schema structure (Green = ok, Red = update needed).
     *
     * @var mixed
     */
    protected $state;
    /**
     * The field ids that that cannot be used and needs to be cleaned up after updating the outdated contents and list items.
     *
     * @var array<string, list<string>>|null
     */
    protected $fieldIdsToCleanup;
    /**
     * The schema ids (of type Content or Layer) for which the contents are outdated and need to be updated.
     *
     * @return list<string>|null
     */
    public function getContentOrLayerSchemaIds(): ?array
    {
        return $this->contentOrLayerSchemaIds;
    }
    /**
     * The schema ids (of type Content or Layer) for which the contents are outdated and need to be updated.
     *
     * @param list<string>|null $contentOrLayerSchemaIds
     *
     * @return self
     */
    public function setContentOrLayerSchemaIds(?array $contentOrLayerSchemaIds): self
    {
        $this->initialized['contentOrLayerSchemaIds'] = true;
        $this->contentOrLayerSchemaIds = $contentOrLayerSchemaIds;
        return $this;
    }
    /**
     * The schema ids (of type List) for which the the list items are outdated and need to be updated.
     *
     * @return list<string>|null
     */
    public function getListSchemaIds(): ?array
    {
        return $this->listSchemaIds;
    }
    /**
     * The schema ids (of type List) for which the the list items are outdated and need to be updated.
     *
     * @param list<string>|null $listSchemaIds
     *
     * @return self
     */
    public function setListSchemaIds(?array $listSchemaIds): self
    {
        $this->initialized['listSchemaIds'] = true;
        $this->listSchemaIds = $listSchemaIds;
        return $this;
    }
    /**
     * The global state of the Contents and ListItems compared to the schema structure (Green = ok, Red = update needed).
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * The global state of the Contents and ListItems compared to the schema structure (Green = ok, Red = update needed).
     *
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The field ids that that cannot be used and needs to be cleaned up after updating the outdated contents and list items.
     *
     * @return array<string, list<string>>|null
     */
    public function getFieldIdsToCleanup(): ?iterable
    {
        return $this->fieldIdsToCleanup;
    }
    /**
     * The field ids that that cannot be used and needs to be cleaned up after updating the outdated contents and list items.
     *
     * @param array<string, list<string>>|null $fieldIdsToCleanup
     *
     * @return self
     */
    public function setFieldIdsToCleanup(?iterable $fieldIdsToCleanup): self
    {
        $this->initialized['fieldIdsToCleanup'] = true;
        $this->fieldIdsToCleanup = $fieldIdsToCleanup;
        return $this;
    }
}