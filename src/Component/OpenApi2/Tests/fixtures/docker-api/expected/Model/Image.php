<?php

namespace Docker\Api\Model;

class Image
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
    protected $id;
    /**
     * 
     *
     * @var list<string>
     */
    protected $repoTags;
    /**
     * 
     *
     * @var list<string>
     */
    protected $repoDigests;
    /**
     * 
     *
     * @var string
     */
    protected $parent;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $container;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig
     */
    protected $containerConfig;
    /**
     * 
     *
     * @var string
     */
    protected $dockerVersion;
    /**
     * 
     *
     * @var string
     */
    protected $author;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig
     */
    protected $config;
    /**
     * 
     *
     * @var string
     */
    protected $architecture;
    /**
     * 
     *
     * @var string
     */
    protected $os;
    /**
     * 
     *
     * @var string
     */
    protected $osVersion;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var int
     */
    protected $virtualSize;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData
     */
    protected $graphDriver;
    /**
     * 
     *
     * @var ImageRootFS
     */
    protected $rootFS;
    /**
     * 
     *
     * @var ImageMetadata
     */
    protected $metadata;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getRepoTags() : array
    {
        return $this->repoTags;
    }
    /**
     * 
     *
     * @param list<string> $repoTags
     *
     * @return self
     */
    public function setRepoTags(array $repoTags) : self
    {
        $this->initialized['repoTags'] = true;
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getRepoDigests() : array
    {
        return $this->repoDigests;
    }
    /**
     * 
     *
     * @param list<string> $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(array $repoDigests) : self
    {
        $this->initialized['repoDigests'] = true;
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParent() : string
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param string $parent
     *
     * @return self
     */
    public function setParent(string $parent) : self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContainer() : string
    {
        return $this->container;
    }
    /**
     * 
     *
     * @param string $container
     *
     * @return self
     */
    public function setContainer(string $container) : self
    {
        $this->initialized['container'] = true;
        $this->container = $container;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return ContainerConfig
     */
    public function getContainerConfig() : ContainerConfig
    {
        return $this->containerConfig;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param ContainerConfig $containerConfig
     *
     * @return self
     */
    public function setContainerConfig(ContainerConfig $containerConfig) : self
    {
        $this->initialized['containerConfig'] = true;
        $this->containerConfig = $containerConfig;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDockerVersion() : string
    {
        return $this->dockerVersion;
    }
    /**
     * 
     *
     * @param string $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion(string $dockerVersion) : self
    {
        $this->initialized['dockerVersion'] = true;
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return ContainerConfig
     */
    public function getConfig() : ContainerConfig
    {
        return $this->config;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param ContainerConfig $config
     *
     * @return self
     */
    public function setConfig(ContainerConfig $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArchitecture() : string
    {
        return $this->architecture;
    }
    /**
     * 
     *
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(string $architecture) : self
    {
        $this->initialized['architecture'] = true;
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOs() : string
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os) : self
    {
        $this->initialized['os'] = true;
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOsVersion() : string
    {
        return $this->osVersion;
    }
    /**
     * 
     *
     * @param string $osVersion
     *
     * @return self
     */
    public function setOsVersion(string $osVersion) : self
    {
        $this->initialized['osVersion'] = true;
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVirtualSize() : int
    {
        return $this->virtualSize;
    }
    /**
     * 
     *
     * @param int $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(int $virtualSize) : self
    {
        $this->initialized['virtualSize'] = true;
        $this->virtualSize = $virtualSize;
        return $this;
    }
    /**
     * Information about a container's graph driver.
     *
     * @return GraphDriverData
     */
    public function getGraphDriver() : GraphDriverData
    {
        return $this->graphDriver;
    }
    /**
     * Information about a container's graph driver.
     *
     * @param GraphDriverData $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(GraphDriverData $graphDriver) : self
    {
        $this->initialized['graphDriver'] = true;
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
     * 
     *
     * @return ImageRootFS
     */
    public function getRootFS() : ImageRootFS
    {
        return $this->rootFS;
    }
    /**
     * 
     *
     * @param ImageRootFS $rootFS
     *
     * @return self
     */
    public function setRootFS(ImageRootFS $rootFS) : self
    {
        $this->initialized['rootFS'] = true;
        $this->rootFS = $rootFS;
        return $this;
    }
    /**
     * 
     *
     * @return ImageMetadata
     */
    public function getMetadata() : ImageMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param ImageMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(ImageMetadata $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}