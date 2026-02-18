<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileUpLinkObj
{
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
    protected $upLinkType;
    /**
     * @var string
     */
    protected $id;
    /**
     * @return string
     */
    public function getUpLinkType(): string
    {
        return $this->upLinkType;
    }
    /**
     * @param string $upLinkType
     *
     * @return self
     */
    public function setUpLinkType(string $upLinkType): self
    {
        $this->initialized['upLinkType'] = true;
        $this->upLinkType = $upLinkType;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}