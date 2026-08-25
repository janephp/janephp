<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Something implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $id;
    /**
     * @var \Symfony\Component\Uid\UuidV4
     */
    protected $uuid;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return \Symfony\Component\Uid\UuidV4
     */
    public function getUuid(): \Symfony\Component\Uid\UuidV4
    {
        return $this->uuid;
    }
    /**
     * @param \Symfony\Component\Uid\UuidV4 $uuid
     *
     * @return self
     */
    public function setUuid(\Symfony\Component\Uid\UuidV4 $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}