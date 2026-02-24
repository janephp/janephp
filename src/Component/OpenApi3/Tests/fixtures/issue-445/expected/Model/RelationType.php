<?php

namespace PicturePark\API\Model;

class RelationType
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
     * The ID of the relation type.
     *
     * @var string
     */
    protected $id;
    /**
     * Language specific relation names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Defines the type of the document target of the relation. Currently supported: Content, ListItem.
     *
     * @var string
     */
    protected $targetDocType;
    /**
     * An optional filter to limit the documents of type TargetDocType.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * The ID of the relation type.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the relation type.
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
     * Language specific relation names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific relation names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * Defines the type of the document target of the relation. Currently supported: Content, ListItem.
     *
     * @return string
     */
    public function getTargetDocType(): string
    {
        return $this->targetDocType;
    }
    /**
     * Defines the type of the document target of the relation. Currently supported: Content, ListItem.
     *
     * @param string $targetDocType
     *
     * @return self
     */
    public function setTargetDocType(string $targetDocType): self
    {
        $this->initialized['targetDocType'] = true;
        $this->targetDocType = $targetDocType;
        return $this;
    }
    /**
     * An optional filter to limit the documents of type TargetDocType.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the documents of type TargetDocType.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
}