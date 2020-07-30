<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422
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
     * @var OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem[]
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
     * @return OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}