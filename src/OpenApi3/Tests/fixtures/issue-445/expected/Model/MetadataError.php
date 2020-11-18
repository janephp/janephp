<?php

namespace PicturePark\API\Model;

class MetadataError
{
    /**
     * 
     *
     * @var string|null
     */
    protected $errorType;
    /**
     * 
     *
     * @var int
     */
    protected $lineNumber;
    /**
     * 
     *
     * @var int
     */
    protected $linePosition;
    /**
     * 
     *
     * @var string|null
     */
    protected $path;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     * 
     *
     * @return string|null
     */
    public function getErrorType() : ?string
    {
        return $this->errorType;
    }
    /**
     * 
     *
     * @param string|null $errorType
     *
     * @return self
     */
    public function setErrorType(?string $errorType) : self
    {
        $this->errorType = $errorType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLineNumber() : int
    {
        return $this->lineNumber;
    }
    /**
     * 
     *
     * @param int $lineNumber
     *
     * @return self
     */
    public function setLineNumber(int $lineNumber) : self
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLinePosition() : int
    {
        return $this->linePosition;
    }
    /**
     * 
     *
     * @param int $linePosition
     *
     * @return self
     */
    public function setLinePosition(int $linePosition) : self
    {
        $this->linePosition = $linePosition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSchemaId() : ?string
    {
        return $this->schemaId;
    }
    /**
     * 
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
}