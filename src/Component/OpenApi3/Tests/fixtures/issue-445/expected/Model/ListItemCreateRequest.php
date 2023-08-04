<?php

namespace PicturePark\API\Model;

class ListItemCreateRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @var string
     */
    protected $contentSchemaId;
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema.
     *
     * @var array<string, mixed>|null
     */
    protected $content;
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @var string|null
    */
    protected $requestId;
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @return string
     */
    public function getContentSchemaId() : string
    {
        return $this->contentSchemaId;
    }
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @param string $contentSchemaId
     *
     * @return self
     */
    public function setContentSchemaId(string $contentSchemaId) : self
    {
        $this->initialized['contentSchemaId'] = true;
        $this->contentSchemaId = $contentSchemaId;
        return $this;
    }
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema.
     *
     * @return array<string, mixed>|null
     */
    public function getContent() : ?iterable
    {
        return $this->content;
    }
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema.
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
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @return string|null
    */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @param string|null $requestId
    *
    * @return self
    */
    public function setRequestId(?string $requestId) : self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
}