<?php

namespace Github\Model;

class ValidationErrorSimple
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $documentationUrl;
    /**
     * 
     *
     * @var string[]
     */
    protected $errors;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDocumentationUrl() : string
    {
        return $this->documentationUrl;
    }
    /**
     * 
     *
     * @param string $documentationUrl
     *
     * @return self
     */
    public function setDocumentationUrl(string $documentationUrl) : self
    {
        $this->documentationUrl = $documentationUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param string[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}