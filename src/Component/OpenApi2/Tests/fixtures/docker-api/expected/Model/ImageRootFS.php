<?php

namespace Docker\Api\Model;

class ImageRootFS
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var list<string>
     */
    public array $layers;
    /**
     * @var string
     */
    public string $baseLayer;
}