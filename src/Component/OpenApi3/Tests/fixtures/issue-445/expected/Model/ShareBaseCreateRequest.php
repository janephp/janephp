<?php

namespace PicturePark\API\Model;

class ShareBaseCreateRequest
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
     * Name of share.
     *
     * @var string
     */
    protected $name;
    /**
     * Optional description of share.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Optional date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    protected $expirationDate;
    /**
     * List of contents including outputs to share.
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
     */
    public function setName(string $name)
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
     */
    public function setDescription(?string $description)
    {
        $this->initialized['description'] = true;
        $this->description = $description;
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
     */
    public function setExpirationDate(?\DateTime $expirationDate)
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
    }
    /**
     * List of contents including outputs to share.
     *
     * @return ShareContent[]
     */
    public function getContents() : array
    {
        return $this->contents;
    }
    /**
     * List of contents including outputs to share.
     *
     * @param ShareContent[] $contents
     */
    public function setContents(array $contents)
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;
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
     */
    public function setLayerSchemaIds(?array $layerSchemaIds)
    {
        $this->initialized['layerSchemaIds'] = true;
        $this->layerSchemaIds = $layerSchemaIds;
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
     */
    public function setOutputAccess($outputAccess)
    {
        $this->initialized['outputAccess'] = true;
        $this->outputAccess = $outputAccess;
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
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}