<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ReindexEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $indexId;
    /**
     * @var string
     */
    protected $state;
    /**
     * @return string|null
     */
    public function getIndexId(): ?string
    {
        return $this->indexId;
    }
    /**
     * @param string|null $indexId
     *
     * @return self
     */
    public function setIndexId(?string $indexId): self
    {
        $this->initialized['indexId'] = true;
        $this->indexId = $indexId;
        return $this;
    }
    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['indexId' => ['indexId', 'getIndexId', 'setIndexId'], 'state' => ['state', 'getState', 'setState']];
    }
}