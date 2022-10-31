<?php

namespace PicturePark\API\Model;

class BulkResponseRow
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
     * ID of the document.
     *
     * @var string
     */
    protected $id;
    /**
     * Version of the document.
     *
     * @var int
     */
    protected $version;
    /**
     * Eventual error.
     *
     * @var string|null
     */
    protected $error;
    /**
     * True if item successfully saved. False otherwise.
     *
     * @var bool
     */
    protected $succeeded;
    /**
     * Returned status code.
     *
     * @var int
     */
    protected $status;
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @var string|null
     */
    protected $requestId;
    /**
     * ID of the document.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of the document.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Version of the document.
     *
     * @return int
     */
    public function getVersion() : int
    {
        return $this->version;
    }
    /**
     * Version of the document.
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * Eventual error.
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * Eventual error.
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * True if item successfully saved. False otherwise.
     *
     * @return bool
     */
    public function getSucceeded() : bool
    {
        return $this->succeeded;
    }
    /**
     * True if item successfully saved. False otherwise.
     *
     * @param bool $succeeded
     *
     * @return self
     */
    public function setSucceeded(bool $succeeded) : self
    {
        $this->initialized['succeeded'] = true;
        $this->succeeded = $succeeded;
        return $this;
    }
    /**
     * Returned status code.
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * Returned status code.
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @return string|null
     */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
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