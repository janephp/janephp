<?php

namespace PicturePark\API\Model;

class ContentPermissionsUpdateItem extends \ArrayObject
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
    * A list of content permission set IDs which control content permissions that will be updated on the content.
    These permissions control content accessibility for the users that do not own the content.
    *
    * @var list<string>|null
    */
    protected $contentPermissionSetIds;
    /**
     * ID of the content.
     *
     * @var string
     */
    protected $contentId;
    /**
    * A list of content permission set IDs which control content permissions that will be updated on the content.
    These permissions control content accessibility for the users that do not own the content.
    *
    * @return list<string>|null
    */
    public function getContentPermissionSetIds() : ?array
    {
        return $this->contentPermissionSetIds;
    }
    /**
    * A list of content permission set IDs which control content permissions that will be updated on the content.
    These permissions control content accessibility for the users that do not own the content.
    *
    * @param list<string>|null $contentPermissionSetIds
    *
    * @return self
    */
    public function setContentPermissionSetIds(?array $contentPermissionSetIds) : self
    {
        $this->initialized['contentPermissionSetIds'] = true;
        $this->contentPermissionSetIds = $contentPermissionSetIds;
        return $this;
    }
    /**
     * ID of the content.
     *
     * @return string
     */
    public function getContentId() : string
    {
        return $this->contentId;
    }
    /**
     * ID of the content.
     *
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId(string $contentId) : self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
}