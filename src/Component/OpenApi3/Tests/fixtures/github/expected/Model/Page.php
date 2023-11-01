<?php

namespace Github\Model;

class Page extends \ArrayObject
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
     * The API address for accessing this Page resource.
     *
     * @var string
     */
    protected $url;
    /**
     * The status of the most recent build of the Page.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The Pages site's custom domain
     *
     * @var string|null
     */
    protected $cname;
    /**
     * Whether the Page has a custom 404 page.
     *
     * @var bool
     */
    protected $custom404 = false;
    /**
     * The web address the Page can be accessed from.
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var PagesSourceHash
     */
    protected $source;
    /**
     * The API address for accessing this Page resource.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The API address for accessing this Page resource.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The status of the most recent build of the Page.
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of the most recent build of the Page.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The Pages site's custom domain
     *
     * @return string|null
     */
    public function getCname() : ?string
    {
        return $this->cname;
    }
    /**
     * The Pages site's custom domain
     *
     * @param string|null $cname
     *
     * @return self
     */
    public function setCname(?string $cname) : self
    {
        $this->initialized['cname'] = true;
        $this->cname = $cname;
        return $this;
    }
    /**
     * Whether the Page has a custom 404 page.
     *
     * @return bool
     */
    public function getCustom404() : bool
    {
        return $this->custom404;
    }
    /**
     * Whether the Page has a custom 404 page.
     *
     * @param bool $custom404
     *
     * @return self
     */
    public function setCustom404(bool $custom404) : self
    {
        $this->initialized['custom404'] = true;
        $this->custom404 = $custom404;
        return $this;
    }
    /**
     * The web address the Page can be accessed from.
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * The web address the Page can be accessed from.
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return PagesSourceHash
     */
    public function getSource() : PagesSourceHash
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param PagesSourceHash $source
     *
     * @return self
     */
    public function setSource(PagesSourceHash $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}