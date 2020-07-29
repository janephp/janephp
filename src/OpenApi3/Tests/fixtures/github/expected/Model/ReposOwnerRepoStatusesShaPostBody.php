<?php

namespace Github\Model;

class ReposOwnerRepoStatusesShaPostBody
{
    /**
     * The state of the status. Can be one of `error`, `failure`, `pending`, or `success`.
     *
     * @var string
     */
    protected $state;
    /**
    * The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  
    `http://ci.example.com/user/repo/build/sha`
    *
    * @var string
    */
    protected $targetUrl;
    /**
     * A short description of the status.
     *
     * @var string
     */
    protected $description;
    /**
     * A string label to differentiate this status from the status of other systems.
     *
     * @var string
     */
    protected $context = 'default';
    /**
     * The state of the status. Can be one of `error`, `failure`, `pending`, or `success`.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state of the status. Can be one of `error`, `failure`, `pending`, or `success`.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
    * The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  
    `http://ci.example.com/user/repo/build/sha`
    *
    * @return string
    */
    public function getTargetUrl() : string
    {
        return $this->targetUrl;
    }
    /**
    * The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  
    `http://ci.example.com/user/repo/build/sha`
    *
    * @param string $targetUrl
    *
    * @return self
    */
    public function setTargetUrl(string $targetUrl) : self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }
    /**
     * A short description of the status.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short description of the status.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * A string label to differentiate this status from the status of other systems.
     *
     * @return string
     */
    public function getContext() : string
    {
        return $this->context;
    }
    /**
     * A string label to differentiate this status from the status of other systems.
     *
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context) : self
    {
        $this->context = $context;
        return $this;
    }
}