<?php

namespace PicturePark\API\Model;

class ContentPermissionsUpdateRequest
{
    /**
    * A list of content permission set IDs which control content permissions that will be updated on the content.
    These permissions control content accessibility for the users that do not own the content.
    *
    * @var string[]|null
    */
    protected $contentPermissionSetIds;
    /**
    * A list of content permission set IDs which control content permissions that will be updated on the content.
    These permissions control content accessibility for the users that do not own the content.
    *
    * @return string[]|null
    */
    public function getContentPermissionSetIds() : ?array
    {
        return $this->contentPermissionSetIds;
    }
    /**
    * A list of content permission set IDs which control content permissions that will be updated on the content.
    These permissions control content accessibility for the users that do not own the content.
    *
    * @param string[]|null $contentPermissionSetIds
    *
    * @return self
    */
    public function setContentPermissionSetIds(?array $contentPermissionSetIds) : self
    {
        $this->contentPermissionSetIds = $contentPermissionSetIds;
        return $this;
    }
}