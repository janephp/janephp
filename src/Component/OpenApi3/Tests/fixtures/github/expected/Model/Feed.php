<?php

namespace Github\Model;

class Feed extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $timelineUrl;
    /**
     * 
     *
     * @var string
     */
    protected $userUrl;
    /**
     * 
     *
     * @var string
     */
    protected $currentUserPublicUrl;
    /**
     * 
     *
     * @var string
     */
    protected $currentUserUrl;
    /**
     * 
     *
     * @var string
     */
    protected $currentUserActorUrl;
    /**
     * 
     *
     * @var string
     */
    protected $currentUserOrganizationUrl;
    /**
     * 
     *
     * @var string[]
     */
    protected $currentUserOrganizationUrls;
    /**
     * 
     *
     * @var string
     */
    protected $securityAdvisoriesUrl;
    /**
     * 
     *
     * @var FeedLinks
     */
    protected $links;
    /**
     * 
     *
     * @return string
     */
    public function getTimelineUrl() : string
    {
        return $this->timelineUrl;
    }
    /**
     * 
     *
     * @param string $timelineUrl
     *
     * @return self
     */
    public function setTimelineUrl(string $timelineUrl) : self
    {
        $this->timelineUrl = $timelineUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserUrl() : string
    {
        return $this->userUrl;
    }
    /**
     * 
     *
     * @param string $userUrl
     *
     * @return self
     */
    public function setUserUrl(string $userUrl) : self
    {
        $this->userUrl = $userUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserPublicUrl() : string
    {
        return $this->currentUserPublicUrl;
    }
    /**
     * 
     *
     * @param string $currentUserPublicUrl
     *
     * @return self
     */
    public function setCurrentUserPublicUrl(string $currentUserPublicUrl) : self
    {
        $this->currentUserPublicUrl = $currentUserPublicUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserUrl() : string
    {
        return $this->currentUserUrl;
    }
    /**
     * 
     *
     * @param string $currentUserUrl
     *
     * @return self
     */
    public function setCurrentUserUrl(string $currentUserUrl) : self
    {
        $this->currentUserUrl = $currentUserUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserActorUrl() : string
    {
        return $this->currentUserActorUrl;
    }
    /**
     * 
     *
     * @param string $currentUserActorUrl
     *
     * @return self
     */
    public function setCurrentUserActorUrl(string $currentUserActorUrl) : self
    {
        $this->currentUserActorUrl = $currentUserActorUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserOrganizationUrl() : string
    {
        return $this->currentUserOrganizationUrl;
    }
    /**
     * 
     *
     * @param string $currentUserOrganizationUrl
     *
     * @return self
     */
    public function setCurrentUserOrganizationUrl(string $currentUserOrganizationUrl) : self
    {
        $this->currentUserOrganizationUrl = $currentUserOrganizationUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getCurrentUserOrganizationUrls() : array
    {
        return $this->currentUserOrganizationUrls;
    }
    /**
     * 
     *
     * @param string[] $currentUserOrganizationUrls
     *
     * @return self
     */
    public function setCurrentUserOrganizationUrls(array $currentUserOrganizationUrls) : self
    {
        $this->currentUserOrganizationUrls = $currentUserOrganizationUrls;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSecurityAdvisoriesUrl() : string
    {
        return $this->securityAdvisoriesUrl;
    }
    /**
     * 
     *
     * @param string $securityAdvisoriesUrl
     *
     * @return self
     */
    public function setSecurityAdvisoriesUrl(string $securityAdvisoriesUrl) : self
    {
        $this->securityAdvisoriesUrl = $securityAdvisoriesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return FeedLinks
     */
    public function getLinks() : FeedLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param FeedLinks $links
     *
     * @return self
     */
    public function setLinks(FeedLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}