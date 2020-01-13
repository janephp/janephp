<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class UrlEntity
{
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    protected $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    protected $end;
    /**
     * A validly formatted URL.
     *
     * @var string
     */
    protected $url;
    /**
     * A validly formatted URL.
     *
     * @var string
     */
    protected $expandedUrl;
    /**
     * The URL as displayed in the Twitter client.
     *
     * @var string
     */
    protected $displayUrl;
    /**
     * HTTP Status Code.
     *
     * @var int
     */
    protected $status;
    /**
     * Title of the page the URL points to.
     *
     * @var string
     */
    protected $title;
    /**
     * Description of the URL landing page.
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var URLImage[]
     */
    protected $images;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @return int
     */
    public function getStart() : int
    {
        return $this->start;
    }
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(int $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @return int
     */
    public function getEnd() : int
    {
        return $this->end;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(int $end) : self
    {
        $this->end = $end;
        return $this;
    }
    /**
     * A validly formatted URL.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * A validly formatted URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * A validly formatted URL.
     *
     * @return string
     */
    public function getExpandedUrl() : string
    {
        return $this->expandedUrl;
    }
    /**
     * A validly formatted URL.
     *
     * @param string $expandedUrl
     *
     * @return self
     */
    public function setExpandedUrl(string $expandedUrl) : self
    {
        $this->expandedUrl = $expandedUrl;
        return $this;
    }
    /**
     * The URL as displayed in the Twitter client.
     *
     * @return string
     */
    public function getDisplayUrl() : string
    {
        return $this->displayUrl;
    }
    /**
     * The URL as displayed in the Twitter client.
     *
     * @param string $displayUrl
     *
     * @return self
     */
    public function setDisplayUrl(string $displayUrl) : self
    {
        $this->displayUrl = $displayUrl;
        return $this;
    }
    /**
     * HTTP Status Code.
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * HTTP Status Code.
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Title of the page the URL points to.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the page the URL points to.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Description of the URL landing page.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the URL landing page.
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
     * 
     *
     * @return URLImage[]
     */
    public function getImages() : array
    {
        return $this->images;
    }
    /**
     * 
     *
     * @param URLImage[] $images
     *
     * @return self
     */
    public function setImages(array $images) : self
    {
        $this->images = $images;
        return $this;
    }
}