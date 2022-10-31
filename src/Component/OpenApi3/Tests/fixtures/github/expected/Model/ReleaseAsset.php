<?php

namespace Github\Model;

class ReleaseAsset extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $browserDownloadUrl;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * The file name of the asset.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $label;
    /**
     * State of the release asset.
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $contentType;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var int
     */
    protected $downloadCount;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var ReleaseAssetUploader|null
     */
    protected $uploader;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrowserDownloadUrl() : string
    {
        return $this->browserDownloadUrl;
    }
    /**
     * 
     *
     * @param string $browserDownloadUrl
     *
     * @return self
     */
    public function setBrowserDownloadUrl(string $browserDownloadUrl) : self
    {
        $this->initialized['browserDownloadUrl'] = true;
        $this->browserDownloadUrl = $browserDownloadUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * The file name of the asset.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The file name of the asset.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * State of the release asset.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State of the release asset.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDownloadCount() : int
    {
        return $this->downloadCount;
    }
    /**
     * 
     *
     * @param int $downloadCount
     *
     * @return self
     */
    public function setDownloadCount(int $downloadCount) : self
    {
        $this->initialized['downloadCount'] = true;
        $this->downloadCount = $downloadCount;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return ReleaseAssetUploader|null
     */
    public function getUploader() : ?ReleaseAssetUploader
    {
        return $this->uploader;
    }
    /**
     * 
     *
     * @param ReleaseAssetUploader|null $uploader
     *
     * @return self
     */
    public function setUploader(?ReleaseAssetUploader $uploader) : self
    {
        $this->initialized['uploader'] = true;
        $this->uploader = $uploader;
        return $this;
    }
}