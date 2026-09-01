<?php

namespace PicturePark\API\Model;

class ContentPermissionsUpdateRequest
{
    /**
     * A list of content permission set IDs which control content permissions that will be updated on the content.
     * These permissions control content accessibility for the users that do not own the content.
     *
     * @var list<string>|null
     */
    public ?array $contentPermissionSetIds;
}