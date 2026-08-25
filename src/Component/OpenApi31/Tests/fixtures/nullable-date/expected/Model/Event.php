<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Event implements AdditionalPropertiesInterface
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
     * @var \DateTime|null
     */
    protected $eventDate;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var string|null
     */
    protected $plainDate;
    /**
     * @return \DateTime|null
     */
    public function getEventDate(): ?\DateTime
    {
        return $this->eventDate;
    }
    /**
     * @param \DateTime|null $eventDate
     *
     * @return self
     */
    public function setEventDate(?\DateTime $eventDate): self
    {
        $this->initialized['eventDate'] = true;
        $this->eventDate = $eventDate;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPlainDate(): ?string
    {
        return $this->plainDate;
    }
    /**
     * @param string|null $plainDate
     *
     * @return self
     */
    public function setPlainDate(?string $plainDate): self
    {
        $this->initialized['plainDate'] = true;
        $this->plainDate = $plainDate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['eventDate' => ['eventDate', 'getEventDate', 'setEventDate'], 'createdAt' => ['createdAt', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updatedAt', 'getUpdatedAt', 'setUpdatedAt'], 'plainDate' => ['plainDate', 'getPlainDate', 'setPlainDate']];
    }
}