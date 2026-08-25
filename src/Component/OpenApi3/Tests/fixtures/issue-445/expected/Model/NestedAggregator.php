<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NestedAggregator extends AggregatorBase implements AdditionalPropertiesInterface
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
     * The path pointing to the nested object.
     *
     * @var string
     */
    protected $path;
    /**
     * The path pointing to the nested object.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     * The path pointing to the nested object.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['path' => ['path', 'getPath', 'setPath']];
    }
}