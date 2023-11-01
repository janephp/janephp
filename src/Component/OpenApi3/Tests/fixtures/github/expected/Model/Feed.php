<?php

namespace Github\Model;

class Feed extends \ArrayObject
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
        $this->initialized['timelineUrl'] = true;
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
        $this->initialized['userUrl'] = true;
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
        $this->initialized['currentUserPublicUrl'] = true;
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
        $this->initialized['currentUserUrl'] = true;
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
        $this->initialized['currentUserActorUrl'] = true;
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
        $this->initialized['currentUserOrganizationUrl'] = true;
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
        $this->initialized['currentUserOrganizationUrls'] = true;
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
        $this->initialized['securityAdvisoriesUrl'] = true;
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
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}