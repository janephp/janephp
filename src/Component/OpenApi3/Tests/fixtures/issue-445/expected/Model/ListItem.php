<?php

namespace PicturePark\API\Model;

class ListItem
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
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * The list item id.
     *
     * @var string
     */
    protected $id;
    /**
     * The id of the schema with schema type list.
     *
     * @var string|null
     */
    protected $contentSchemaId;
    /**
     * Contains language specific display values, rendered according to the list schema's display pattern configuration.
     *
     * @var mixed|null
     */
    protected $displayValues;
    /**
     * The content data of the list item.
     *
     * @var array<string, mixed>|null
     */
    protected $content;
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @var list<string>|null
     */
    protected $brokenReferenceIds;
    /**
     * All the target ids of the broken relations
     *
     * @var list<string>|null
     */
    protected $brokenRelationTargetIds;
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @var list<string>|null
     */
    protected $brokenIndirectReferenceIds;
    /**
     * LifeCycle of list item
     *
     * @var mixed
     */
    protected $lifeCycle;
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    /**
     * The list item id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The list item id.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The id of the schema with schema type list.
     *
     * @return string|null
     */
    public function getContentSchemaId(): ?string
    {
        return $this->contentSchemaId;
    }
    /**
     * The id of the schema with schema type list.
     *
     * @param string|null $contentSchemaId
     *
     * @return self
     */
    public function setContentSchemaId(?string $contentSchemaId): self
    {
        $this->initialized['contentSchemaId'] = true;
        $this->contentSchemaId = $contentSchemaId;
        return $this;
    }
    /**
     * Contains language specific display values, rendered according to the list schema's display pattern configuration.
     *
     * @return mixed
     */
    public function getDisplayValues()
    {
        return $this->displayValues;
    }
    /**
     * Contains language specific display values, rendered according to the list schema's display pattern configuration.
     *
     * @param mixed $displayValues
     *
     * @return self
     */
    public function setDisplayValues($displayValues): self
    {
        $this->initialized['displayValues'] = true;
        $this->displayValues = $displayValues;
        return $this;
    }
    /**
     * The content data of the list item.
     *
     * @return array<string, mixed>|null
     */
    public function getContent(): ?iterable
    {
        return $this->content;
    }
    /**
     * The content data of the list item.
     *
     * @param array<string, mixed>|null $content
     *
     * @return self
     */
    public function setContent(?iterable $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @return list<string>|null
     */
    public function getBrokenReferenceIds(): ?array
    {
        return $this->brokenReferenceIds;
    }
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @param list<string>|null $brokenReferenceIds
     *
     * @return self
     */
    public function setBrokenReferenceIds(?array $brokenReferenceIds): self
    {
        $this->initialized['brokenReferenceIds'] = true;
        $this->brokenReferenceIds = $brokenReferenceIds;
        return $this;
    }
    /**
     * All the target ids of the broken relations
     *
     * @return list<string>|null
     */
    public function getBrokenRelationTargetIds(): ?array
    {
        return $this->brokenRelationTargetIds;
    }
    /**
     * All the target ids of the broken relations
     *
     * @param list<string>|null $brokenRelationTargetIds
     *
     * @return self
     */
    public function setBrokenRelationTargetIds(?array $brokenRelationTargetIds): self
    {
        $this->initialized['brokenRelationTargetIds'] = true;
        $this->brokenRelationTargetIds = $brokenRelationTargetIds;
        return $this;
    }
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @return list<string>|null
     */
    public function getBrokenIndirectReferenceIds(): ?array
    {
        return $this->brokenIndirectReferenceIds;
    }
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @param list<string>|null $brokenIndirectReferenceIds
     *
     * @return self
     */
    public function setBrokenIndirectReferenceIds(?array $brokenIndirectReferenceIds): self
    {
        $this->initialized['brokenIndirectReferenceIds'] = true;
        $this->brokenIndirectReferenceIds = $brokenIndirectReferenceIds;
        return $this;
    }
    /**
     * LifeCycle of list item
     *
     * @return mixed
     */
    public function getLifeCycle()
    {
        return $this->lifeCycle;
    }
    /**
     * LifeCycle of list item
     *
     * @param mixed $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle($lifeCycle): self
    {
        $this->initialized['lifeCycle'] = true;
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
}