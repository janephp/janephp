<?php

namespace PicturePark\API\Model;

class XmpMappingEntryCreateRequest
{
    /**
     * Direction of the mapping.
     *
     * @var mixed
     */
    protected $direction;
    /**
     * Priority of the mapping.
     *
     * @var int
     */
    protected $priority;
    /**
     * Stop processing further mappings for the same field if a value was found.
     *
     * @var bool
     */
    protected $stopProcessing;
    /**
     * Path to source property in XMP.
     *
     * @var string
     */
    protected $xmpPath;
    /**
     * Path to target property in metadata.
     *
     * @var string
     */
    protected $metadataPath;
    /**
     * Optional additional configuration for the mapping.
     *
     * @var mixed|null
     */
    protected $configuration;
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @var string|null
    */
    protected $requestId;
    /**
     * Direction of the mapping.
     *
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }
    /**
     * Direction of the mapping.
     *
     * @param mixed $direction
     *
     * @return self
     */
    public function setDirection($direction) : self
    {
        $this->direction = $direction;
        return $this;
    }
    /**
     * Priority of the mapping.
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * Priority of the mapping.
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * Stop processing further mappings for the same field if a value was found.
     *
     * @return bool
     */
    public function getStopProcessing() : bool
    {
        return $this->stopProcessing;
    }
    /**
     * Stop processing further mappings for the same field if a value was found.
     *
     * @param bool $stopProcessing
     *
     * @return self
     */
    public function setStopProcessing(bool $stopProcessing) : self
    {
        $this->stopProcessing = $stopProcessing;
        return $this;
    }
    /**
     * Path to source property in XMP.
     *
     * @return string
     */
    public function getXmpPath() : string
    {
        return $this->xmpPath;
    }
    /**
     * Path to source property in XMP.
     *
     * @param string $xmpPath
     *
     * @return self
     */
    public function setXmpPath(string $xmpPath) : self
    {
        $this->xmpPath = $xmpPath;
        return $this;
    }
    /**
     * Path to target property in metadata.
     *
     * @return string
     */
    public function getMetadataPath() : string
    {
        return $this->metadataPath;
    }
    /**
     * Path to target property in metadata.
     *
     * @param string $metadataPath
     *
     * @return self
     */
    public function setMetadataPath(string $metadataPath) : self
    {
        $this->metadataPath = $metadataPath;
        return $this;
    }
    /**
     * Optional additional configuration for the mapping.
     *
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
    /**
     * Optional additional configuration for the mapping.
     *
     * @param mixed $configuration
     *
     * @return self
     */
    public function setConfiguration($configuration) : self
    {
        $this->configuration = $configuration;
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
        $this->requestId = $requestId;
        return $this;
    }
}