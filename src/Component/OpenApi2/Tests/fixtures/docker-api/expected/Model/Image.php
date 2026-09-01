<?php

namespace Docker\Api\Model;

class Image
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var list<string>
     */
    public array $repoTags;
    /**
     * @var list<string>
     */
    public array $repoDigests;
    /**
     * @var string
     */
    public string $parent;
    /**
     * @var string
     */
    public string $comment;
    /**
     * @var string
     */
    public string $created;
    /**
     * @var string
     */
    public string $container;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig
     */
    public ContainerConfig $containerConfig;
    /**
     * @var string
     */
    public string $dockerVersion;
    /**
     * @var string
     */
    public string $author;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig
     */
    public ContainerConfig $config;
    /**
     * @var string
     */
    public string $architecture;
    /**
     * @var string
     */
    public string $os;
    /**
     * @var string
     */
    public string $osVersion;
    /**
     * @var int
     */
    public int $size;
    /**
     * @var int
     */
    public int $virtualSize;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData
     */
    public GraphDriverData $graphDriver;
    /**
     * @var ImageRootFS
     */
    public ImageRootFS $rootFS;
    /**
     * @var ImageMetadata
     */
    public ImageMetadata $metadata;
}