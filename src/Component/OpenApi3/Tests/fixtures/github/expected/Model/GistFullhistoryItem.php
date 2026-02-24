<?php

namespace Github\Model;

class GistFullHistoryItem extends \ArrayObject
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
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $version;
    /**
     * @var GistFullHistoryItemUser|null
     */
    protected $user;
    /**
     * @var GistFullHistoryItemChangeStatus
     */
    protected $changeStatus;
    /**
     * @var string
     */
    protected $committedAt;
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * @return GistFullHistoryItemUser|null
     */
    public function getUser(): ?GistFullHistoryItemUser
    {
        return $this->user;
    }
    /**
     * @param GistFullHistoryItemUser|null $user
     *
     * @return self
     */
    public function setUser(?GistFullHistoryItemUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * @return GistFullHistoryItemChangeStatus
     */
    public function getChangeStatus(): GistFullHistoryItemChangeStatus
    {
        return $this->changeStatus;
    }
    /**
     * @param GistFullHistoryItemChangeStatus $changeStatus
     *
     * @return self
     */
    public function setChangeStatus(GistFullHistoryItemChangeStatus $changeStatus): self
    {
        $this->initialized['changeStatus'] = true;
        $this->changeStatus = $changeStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getCommittedAt(): string
    {
        return $this->committedAt;
    }
    /**
     * @param string $committedAt
     *
     * @return self
     */
    public function setCommittedAt(string $committedAt): self
    {
        $this->initialized['committedAt'] = true;
        $this->committedAt = $committedAt;
        return $this;
    }
}