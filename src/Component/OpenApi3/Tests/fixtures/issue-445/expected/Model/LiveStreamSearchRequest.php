<?php

namespace PicturePark\API\Model;

class LiveStreamSearchRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Sets the start date and time for results based on Timestamp attribute.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * Sets the end date and time for results based on Timestamp attribute.
     *
     * @var \DateTime
     */
    protected $to;
    /**
     * Optionally limits the result to only the specified scope type.
     *
     * @var string|null
     */
    protected $scopeType;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @var int
     */
    protected $limit = 30;
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * Sets the start date and time for results based on Timestamp attribute.
     *
     * @return \DateTime
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }
    /**
     * Sets the start date and time for results based on Timestamp attribute.
     *
     * @param \DateTime $from
     *
     * @return self
     */
    public function setFrom(\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * Sets the end date and time for results based on Timestamp attribute.
     *
     * @return \DateTime
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }
    /**
     * Sets the end date and time for results based on Timestamp attribute.
     *
     * @param \DateTime $to
     *
     * @return self
     */
    public function setTo(\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
    /**
     * Optionally limits the result to only the specified scope type.
     *
     * @return string|null
     */
    public function getScopeType(): ?string
    {
        return $this->scopeType;
    }
    /**
     * Optionally limits the result to only the specified scope type.
     *
     * @param string|null $scopeType
     *
     * @return self
     */
    public function setScopeType(?string $scopeType): self
    {
        $this->initialized['scopeType'] = true;
        $this->scopeType = $scopeType;
        return $this;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @return string|null
     */
    public function getPageToken(): ?string
    {
        return $this->pageToken;
    }
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @param string|null $pageToken
     *
     * @return self
     */
    public function setPageToken(?string $pageToken): self
    {
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
}