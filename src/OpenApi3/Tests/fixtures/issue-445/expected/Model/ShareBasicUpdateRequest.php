<?php

namespace PicturePark\API\Model;

class ShareBasicUpdateRequest
{
    /**
     * Name of share.
     *
     * @var string
     */
    protected $name;
    /**
     * Optional date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    protected $expirationDate;
    /**
     * Optional description of share.
     *
     * @var string|null
     */
    protected $description;
    /**
     * List of contents including outputs. Existing items needs to be sent again, otherwise they will be removed.
     *
     * @var ShareContent[]
     */
    protected $contents;
    /**
     * List of content layers to share.
     *
     * @var string[]|null
     */
    protected $layerSchemaIds;
    /**
     * Access for content outputs in share.
     *
     * @var mixed
     */
    protected $outputAccess;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Optional date when share expires and cannot be accessed anymore.
     *
     * @return \DateTime|null
     */
    public function getExpirationDate() : ?\DateTime
    {
        return $this->expirationDate;
    }
    /**
     * Optional date when share expires and cannot be accessed anymore.
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
     * Optional description of share.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Optional description of share.
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
     * List of contents including outputs. Existing items needs to be sent again, otherwise they will be removed.
     *
     * @return ShareContent[]
     */
    public function getContents() : array
    {
        return $this->contents;
    }
    /**
     * List of contents including outputs. Existing items needs to be sent again, otherwise they will be removed.
     *
     * @param ShareContent[] $contents
     *
     * @return self
     */
    public function setContents(array $contents) : self
    {
        $this->contents = $contents;
        return $this;
    }
    /**
     * List of content layers to share.
     *
     * @return string[]|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * List of content layers to share.
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
     * Access for content outputs in share.
     *
     * @return mixed
     */
    public function getOutputAccess()
    {
        return $this->outputAccess;
    }
    /**
     * Access for content outputs in share.
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
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
}