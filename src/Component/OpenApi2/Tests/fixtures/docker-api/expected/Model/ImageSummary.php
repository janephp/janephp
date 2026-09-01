<?php

namespace Docker\Api\Model;

class ImageSummary
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $parentId;
    /**
     * @var list<string>
     */
    public array $repoTags;
    /**
     * @var list<string>
     */
    public array $repoDigests;
    /**
     * @var int
     */
    public int $created;
    /**
     * @var int
     */
    public int $size;
    /**
     * @var int
     */
    public int $sharedSize;
    /**
     * @var int
     */
    public int $virtualSize;
    /**
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * @var int
     */
    public int $containers;
}