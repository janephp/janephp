<?php

namespace Github\Model;

class ProjectsColumnsCardsCardIdMovesPostResponse503
{
    /**
     * 
     *
     * @var string
     */
    protected $code;
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
     * @var ProjectsColumnsCardsCardIdMovesPostResponse503ErrorsItem[]
     */
    protected $errors;
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
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
     * @return ProjectsColumnsCardsCardIdMovesPostResponse503ErrorsItem[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param ProjectsColumnsCardsCardIdMovesPostResponse503ErrorsItem[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}