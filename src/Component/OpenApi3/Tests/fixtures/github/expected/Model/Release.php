<?php

namespace Github\Model;

class Release extends \ArrayObject
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
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $assetsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $uploadUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $tarballUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $zipballUrl;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * The name of the tag.
     *
     * @var string
     */
    protected $tagName;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     *
     * @var string
     */
    protected $targetCommitish;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $body;
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     *
     * @var bool
     */
    protected $draft;
    /**
     * Whether to identify the release as a prerelease or a full release.
     *
     * @var bool
     */
    protected $prerelease;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $publishedAt;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $author;
    /**
     * 
     *
     * @var ReleaseAsset[]
     */
    protected $assets;
    /**
     * 
     *
     * @var string
     */
    protected $bodyHtml;
    /**
     * 
     *
     * @var string
     */
    protected $bodyText;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
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
     * @return string
     */
    public function getAssetsUrl() : string
    {
        return $this->assetsUrl;
    }
    /**
     * 
     *
     * @param string $assetsUrl
     *
     * @return self
     */
    public function setAssetsUrl(string $assetsUrl) : self
    {
        $this->initialized['assetsUrl'] = true;
        $this->assetsUrl = $assetsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUploadUrl() : string
    {
        return $this->uploadUrl;
    }
    /**
     * 
     *
     * @param string $uploadUrl
     *
     * @return self
     */
    public function setUploadUrl(string $uploadUrl) : self
    {
        $this->initialized['uploadUrl'] = true;
        $this->uploadUrl = $uploadUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTarballUrl() : ?string
    {
        return $this->tarballUrl;
    }
    /**
     * 
     *
     * @param string|null $tarballUrl
     *
     * @return self
     */
    public function setTarballUrl(?string $tarballUrl) : self
    {
        $this->initialized['tarballUrl'] = true;
        $this->tarballUrl = $tarballUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getZipballUrl() : ?string
    {
        return $this->zipballUrl;
    }
    /**
     * 
     *
     * @param string|null $zipballUrl
     *
     * @return self
     */
    public function setZipballUrl(?string $zipballUrl) : self
    {
        $this->initialized['zipballUrl'] = true;
        $this->zipballUrl = $zipballUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * The name of the tag.
     *
     * @return string
     */
    public function getTagName() : string
    {
        return $this->tagName;
    }
    /**
     * The name of the tag.
     *
     * @param string $tagName
     *
     * @return self
     */
    public function setTagName(string $tagName) : self
    {
        $this->initialized['tagName'] = true;
        $this->tagName = $tagName;
        return $this;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     *
     * @return string
     */
    public function getTargetCommitish() : string
    {
        return $this->targetCommitish;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     *
     * @param string $targetCommitish
     *
     * @return self
     */
    public function setTargetCommitish(string $targetCommitish) : self
    {
        $this->initialized['targetCommitish'] = true;
        $this->targetCommitish = $targetCommitish;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     *
     * @return bool
     */
    public function getDraft() : bool
    {
        return $this->draft;
    }
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     *
     * @param bool $draft
     *
     * @return self
     */
    public function setDraft(bool $draft) : self
    {
        $this->initialized['draft'] = true;
        $this->draft = $draft;
        return $this;
    }
    /**
     * Whether to identify the release as a prerelease or a full release.
     *
     * @return bool
     */
    public function getPrerelease() : bool
    {
        return $this->prerelease;
    }
    /**
     * Whether to identify the release as a prerelease or a full release.
     *
     * @param bool $prerelease
     *
     * @return self
     */
    public function setPrerelease(bool $prerelease) : self
    {
        $this->initialized['prerelease'] = true;
        $this->prerelease = $prerelease;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getPublishedAt() : ?\DateTime
    {
        return $this->publishedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $publishedAt
     *
     * @return self
     */
    public function setPublishedAt(?\DateTime $publishedAt) : self
    {
        $this->initialized['publishedAt'] = true;
        $this->publishedAt = $publishedAt;
        return $this;
    }
    /**
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getAuthor() : ?SimpleUser
    {
        return $this->author;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $author
     *
     * @return self
     */
    public function setAuthor(?SimpleUser $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return ReleaseAsset[]
     */
    public function getAssets() : array
    {
        return $this->assets;
    }
    /**
     * 
     *
     * @param ReleaseAsset[] $assets
     *
     * @return self
     */
    public function setAssets(array $assets) : self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyHtml() : string
    {
        return $this->bodyHtml;
    }
    /**
     * 
     *
     * @param string $bodyHtml
     *
     * @return self
     */
    public function setBodyHtml(string $bodyHtml) : self
    {
        $this->initialized['bodyHtml'] = true;
        $this->bodyHtml = $bodyHtml;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyText() : string
    {
        return $this->bodyText;
    }
    /**
     * 
     *
     * @param string $bodyText
     *
     * @return self
     */
    public function setBodyText(string $bodyText) : self
    {
        $this->initialized['bodyText'] = true;
        $this->bodyText = $bodyText;
        return $this;
    }
}