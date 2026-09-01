<?php

namespace Docker\Api\Model;

class SystemDfGetResponse200
{
    /**
     * @var int
     */
    public int $layersSize;
    /**
     * @var list<ImageSummary>
     */
    public array $images;
    /**
     * @var list<ContainerSummary>
     */
    public array $containers;
    /**
     * @var list<Volume>
     */
    public array $volumes;
    /**
     * @var list<BuildCache>
     */
    public array $buildCache;
}