<?php

namespace PicturePark\API\Model;

class ShareDetail
{
    /**
     * Share ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of share.
     *
     * @var string
     */
    protected $name;
    /**
     * Description of share entered by user.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Creator of share.
     *
     * @var mixed
     */
    protected $creator;
    /**
     * Audit information.
     *
     * @var mixed
     */
    protected $audit;
    /**
     * Detailed information about contents in the share.
     *
     * @var ShareContentDetail[]
     */
    protected $contentSelections;
    /**
     * List of shared layers.
     *
     * @var string[]|null
     */
    protected $layerSchemaIds;
    /**
     * Detail of share.
     *
     * @var mixed|null
     */
    protected $data;
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    protected $expirationDate;
    /**
     * Info if share is already expired.
     *
     * @var bool
     */
    protected $expired;
    /**
     * Defined access for contents in share.
     *
     * @var mixed
     */
    protected $outputAccess;
    /**
     * Type of share.
     *
     * @var mixed
     */
    protected $shareType;
    /**
     * Schema detail of the content and the layers.
     *
     * @var SchemaDetail[]|null
     */
    protected $schemas;
    /**
     * Share ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Share ID.
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
    /**
     * Name of share.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of share.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Description of share entered by user.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of share entered by user.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Creator of share.
     *
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }
    /**
     * Creator of share.
     *
     * @param mixed $creator
     *
     * @return self
     */
    public function setCreator($creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit) : self
    {
        $this->audit = $audit;
        return $this;
    }
    /**
     * Detailed information about contents in the share.
     *
     * @return ShareContentDetail[]
     */
    public function getContentSelections() : array
    {
        return $this->contentSelections;
    }
    /**
     * Detailed information about contents in the share.
     *
     * @param ShareContentDetail[] $contentSelections
     *
     * @return self
     */
    public function setContentSelections(array $contentSelections) : self
    {
        $this->contentSelections = $contentSelections;
        return $this;
    }
    /**
     * List of shared layers.
     *
     * @return string[]|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * List of shared layers.
     *
     * @param string[]|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds) : self
    {
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
     * Detail of share.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Detail of share.
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @return \DateTime|null
     */
    public function getExpirationDate() : ?\DateTime
    {
        return $this->expirationDate;
    }
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @param \DateTime|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate) : self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Info if share is already expired.
     *
     * @return bool
     */
    public function getExpired() : bool
    {
        return $this->expired;
    }
    /**
     * Info if share is already expired.
     *
     * @param bool $expired
     *
     * @return self
     */
    public function setExpired(bool $expired) : self
    {
        $this->expired = $expired;
        return $this;
    }
    /**
     * Defined access for contents in share.
     *
     * @return mixed
     */
    public function getOutputAccess()
    {
        return $this->outputAccess;
    }
    /**
     * Defined access for contents in share.
     *
     * @param mixed $outputAccess
     *
     * @return self
     */
    public function setOutputAccess($outputAccess) : self
    {
        $this->outputAccess = $outputAccess;
        return $this;
    }
    /**
     * Type of share.
     *
     * @return mixed
     */
    public function getShareType()
    {
        return $this->shareType;
    }
    /**
     * Type of share.
     *
     * @param mixed $shareType
     *
     * @return self
     */
    public function setShareType($shareType) : self
    {
        $this->shareType = $shareType;
        return $this;
    }
    /**
     * Schema detail of the content and the layers.
     *
     * @return SchemaDetail[]|null
     */
    public function getSchemas() : ?array
    {
        return $this->schemas;
    }
    /**
     * Schema detail of the content and the layers.
     *
     * @param SchemaDetail[]|null $schemas
     *
     * @return self
     */
    public function setSchemas(?array $schemas) : self
    {
        $this->schemas = $schemas;
        return $this;
    }
}