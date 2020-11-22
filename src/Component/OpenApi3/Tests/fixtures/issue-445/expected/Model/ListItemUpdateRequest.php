<?php

namespace PicturePark\API\Model;

class ListItemUpdateRequest
{
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @var mixed|null
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
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @param mixed $content
     *
     * @return self
     */
    public function setContent($content) : self
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
}