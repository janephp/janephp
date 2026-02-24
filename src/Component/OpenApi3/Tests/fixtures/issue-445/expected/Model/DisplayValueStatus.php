<?php

namespace PicturePark\API\Model;

class DisplayValueStatus
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
     * The schema ids (of type Content or Layer) for which the re-rendering of the display values is needed.
     *
     * @var list<string>|null
     */
    protected $contentOrLayerSchemaIds;
    /**
     * The schema ids (of type List) for which the re-rendering of the display values is needed.
     *
     * @var list<string>|null
     */
    protected $listSchemaIds;
    /**
     * The state of the display values compared to the schema structure (UpToDate = ok, Outdated = re-rendering needed).
     *
     * @var mixed
     */
    protected $state;
    /**
     * The schema ids (of type Content or Layer) for which the re-rendering of the display values is needed.
     *
     * @return list<string>|null
     */
    public function getContentOrLayerSchemaIds(): ?array
    {
        return $this->contentOrLayerSchemaIds;
    }
    /**
     * The schema ids (of type Content or Layer) for which the re-rendering of the display values is needed.
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
     * The schema ids (of type List) for which the re-rendering of the display values is needed.
     *
     * @return list<string>|null
     */
    public function getListSchemaIds(): ?array
    {
        return $this->listSchemaIds;
    }
    /**
     * The schema ids (of type List) for which the re-rendering of the display values is needed.
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
     * The state of the display values compared to the schema structure (UpToDate = ok, Outdated = re-rendering needed).
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * The state of the display values compared to the schema structure (UpToDate = ok, Outdated = re-rendering needed).
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
}