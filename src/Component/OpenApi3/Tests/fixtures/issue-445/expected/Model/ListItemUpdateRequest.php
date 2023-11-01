<?php

namespace PicturePark\API\Model;

class ListItemUpdateRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
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
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace any existing content.
    Defaults to Merge.
    *
    * @var mixed
    */
    protected $contentFieldsUpdateOptions = 'Merge';
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @return array<string, mixed>|null
     */
    public function getContent() : ?iterable
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
    public function setContent(?iterable $content) : self
    {
        $this->initialized['content'] = true;
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
        $this->initialized['contentFieldsUpdateOptions'] = true;
        $this->contentFieldsUpdateOptions = $contentFieldsUpdateOptions;
        return $this;
    }
}