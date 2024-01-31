<?php

namespace PicturePark\API\Model;

class MetadataReference
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
     * Target ID of reference.
     *
     * @var string
     */
    protected $targetMetadataItemId;
    /**
    * Indicates if the source of the reference is restricted because of permissions.
    If this is true and the SourceMetadataItemId property is filled, the user does not have the
    edit permission on the source metadata item. If the SourceMetadataItemId is null, the user also
    does not have the view permission on that item.
    *
    * @var bool
    */
    protected $isRestricted;
    /**
     * ID of the source of the reference.
     *
     * @var string|null
     */
    protected $sourceMetadataItemId;
    /**
     * DocType of the source of the reference.
     *
     * @var string|null
     */
    protected $sourceDocType;
    /**
     * Target ID of reference.
     *
     * @return string
     */
    public function getTargetMetadataItemId() : string
    {
        return $this->targetMetadataItemId;
    }
    /**
     * Target ID of reference.
     *
     * @param string $targetMetadataItemId
     *
     * @return self
     */
    public function setTargetMetadataItemId(string $targetMetadataItemId) : self
    {
        $this->initialized['targetMetadataItemId'] = true;
        $this->targetMetadataItemId = $targetMetadataItemId;
        return $this;
    }
    /**
    * Indicates if the source of the reference is restricted because of permissions.
    If this is true and the SourceMetadataItemId property is filled, the user does not have the
    edit permission on the source metadata item. If the SourceMetadataItemId is null, the user also
    does not have the view permission on that item.
    *
    * @return bool
    */
    public function getIsRestricted() : bool
    {
        return $this->isRestricted;
    }
    /**
    * Indicates if the source of the reference is restricted because of permissions.
    If this is true and the SourceMetadataItemId property is filled, the user does not have the
    edit permission on the source metadata item. If the SourceMetadataItemId is null, the user also
    does not have the view permission on that item.
    *
    * @param bool $isRestricted
    *
    * @return self
    */
    public function setIsRestricted(bool $isRestricted) : self
    {
        $this->initialized['isRestricted'] = true;
        $this->isRestricted = $isRestricted;
        return $this;
    }
    /**
     * ID of the source of the reference.
     *
     * @return string|null
     */
    public function getSourceMetadataItemId() : ?string
    {
        return $this->sourceMetadataItemId;
    }
    /**
     * ID of the source of the reference.
     *
     * @param string|null $sourceMetadataItemId
     *
     * @return self
     */
    public function setSourceMetadataItemId(?string $sourceMetadataItemId) : self
    {
        $this->initialized['sourceMetadataItemId'] = true;
        $this->sourceMetadataItemId = $sourceMetadataItemId;
        return $this;
    }
    /**
     * DocType of the source of the reference.
     *
     * @return string|null
     */
    public function getSourceDocType() : ?string
    {
        return $this->sourceDocType;
    }
    /**
     * DocType of the source of the reference.
     *
     * @param string|null $sourceDocType
     *
     * @return self
     */
    public function setSourceDocType(?string $sourceDocType) : self
    {
        $this->initialized['sourceDocType'] = true;
        $this->sourceDocType = $sourceDocType;
        return $this;
    }
}