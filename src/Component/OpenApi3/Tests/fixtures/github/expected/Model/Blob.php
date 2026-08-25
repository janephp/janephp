<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class Blob implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    protected $content;
    /**
     * @var string
     */
    protected $encoding;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $sha;
    /**
     * @var int|null
     */
    protected $size;
    /**
     * @var string
     */
    protected $nodeId;
    /**
     * @var string
     */
    protected $highlightedContent;
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }
    /**
     * @param string $encoding
     *
     * @return self
     */
    public function setEncoding(string $encoding): self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;
        return $this;
    }
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
    public function getSha(): string
    {
        return $this->sha;
    }
    /**
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha): self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * @return string
     */
    public function getNodeId(): string
    {
        return $this->nodeId;
    }
    /**
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId): self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * @return string
     */
    public function getHighlightedContent(): string
    {
        return $this->highlightedContent;
    }
    /**
     * @param string $highlightedContent
     *
     * @return self
     */
    public function setHighlightedContent(string $highlightedContent): self
    {
        $this->initialized['highlightedContent'] = true;
        $this->highlightedContent = $highlightedContent;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['content' => ['content', 'getContent', 'setContent'], 'encoding' => ['encoding', 'getEncoding', 'setEncoding'], 'url' => ['url', 'getUrl', 'setUrl'], 'sha' => ['sha', 'getSha', 'setSha'], 'size' => ['size', 'getSize', 'setSize'], 'nodeId' => ['node_id', 'getNodeId', 'setNodeId'], 'highlightedContent' => ['highlighted_content', 'getHighlightedContent', 'setHighlightedContent']];
    }
}