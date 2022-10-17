<?php

namespace PicturePark\API\Model;

class ListItemUpdateItem extends \ArrayObject
{
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @var mixed[]|null
     */
    protected $content;
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace any existing content.
    Defaults to Merge.
    *
    * @var mixed
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
     * @return mixed[]|null
     */
    public function getContent() : ?iterable
    {
        return $this->content;
    }
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @param mixed[]|null $content
     *
     * @return self
     */
    public function setContent(?iterable $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace any existing content.
    Defaults to Merge.
    *
    * @return mixed
    */
    public function getContentFieldsUpdateOptions()
    {
        return $this->contentFieldsUpdateOptions;
    }
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace any existing content.
    Defaults to Merge.
    *
    * @param mixed $contentFieldsUpdateOptions
    *
    * @return self
    */
    public function setContentFieldsUpdateOptions($contentFieldsUpdateOptions) : self
    {
        $this->contentFieldsUpdateOptions = $contentFieldsUpdateOptions;
        return $this;
    }
    /**
     * The list item id.
     *
     * @return string
     */
    public function getId() : string
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
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}