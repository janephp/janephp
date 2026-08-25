<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ListItemUpdateItem implements AdditionalPropertiesInterface
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
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @var array<string, mixed>|null
     */
    protected $content;
    /**
     * Options to modify the behavior for updating the content.
     * Merge: the values specified in the Content object are merged to the existing content.
     * Replace: the values specified in the Content object entirely replace any existing content.
     * Defaults to Merge.
     *
     * @var string
     */
    protected $contentFieldsUpdateOptions = 'Merge';
    /**
     * The list item id.
     *
     * @var string
     */
    protected $id;
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @return array<string, mixed>|null
     */
    public function getContent(): ?iterable
    {
        return $this->content;
    }
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
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
     * Options to modify the behavior for updating the content.
     * Merge: the values specified in the Content object are merged to the existing content.
     * Replace: the values specified in the Content object entirely replace any existing content.
     * Defaults to Merge.
     *
     * @return string
     */
    public function getContentFieldsUpdateOptions(): string
    {
        return $this->contentFieldsUpdateOptions;
    }
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace any existing content.
    Defaults to Merge.
    *
    * @param string $contentFieldsUpdateOptions
    *
    * @return self
    */
    public function setContentFieldsUpdateOptions(string $contentFieldsUpdateOptions): self
    {
        $this->initialized['contentFieldsUpdateOptions'] = true;
        $this->contentFieldsUpdateOptions = $contentFieldsUpdateOptions;
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
    public function definedProperties(): array
    {
        return ['content' => ['content', 'getContent', 'setContent'], 'contentFieldsUpdateOptions' => ['contentFieldsUpdateOptions', 'getContentFieldsUpdateOptions', 'setContentFieldsUpdateOptions'], 'id' => ['id', 'getId', 'setId']];
    }
}