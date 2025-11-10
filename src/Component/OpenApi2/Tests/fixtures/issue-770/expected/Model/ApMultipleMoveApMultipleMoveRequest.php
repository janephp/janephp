<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApMultipleMoveApMultipleMoveRequest
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
     * Target Zone Id for moving multiple APs
     *
     * @var string
     */
    protected $targetZoneId;
    /**
     * Target AP Group Id for moving multiple APs. The target AP group should be under the target Zone.
     *
     * @var string
     */
    protected $targetApGroupId;
    /**
     * List of AP MAC which wants to move. Maximum of AP MACs: 50.
     *
     * @var list<string>
     */
    protected $apMacs;
    /**
     * Target Zone Id for moving multiple APs
     *
     * @return string
     */
    public function getTargetZoneId(): string
    {
        return $this->targetZoneId;
    }
    /**
     * Target Zone Id for moving multiple APs
     *
     * @param string $targetZoneId
     *
     * @return self
     */
    public function setTargetZoneId(string $targetZoneId): self
    {
        $this->initialized['targetZoneId'] = true;
        $this->targetZoneId = $targetZoneId;
        return $this;
    }
    /**
     * Target AP Group Id for moving multiple APs. The target AP group should be under the target Zone.
     *
     * @return string
     */
    public function getTargetApGroupId(): string
    {
        return $this->targetApGroupId;
    }
    /**
     * Target AP Group Id for moving multiple APs. The target AP group should be under the target Zone.
     *
     * @param string $targetApGroupId
     *
     * @return self
     */
    public function setTargetApGroupId(string $targetApGroupId): self
    {
        $this->initialized['targetApGroupId'] = true;
        $this->targetApGroupId = $targetApGroupId;
        return $this;
    }
    /**
     * List of AP MAC which wants to move. Maximum of AP MACs: 50.
     *
     * @return list<string>
     */
    public function getApMacs(): array
    {
        return $this->apMacs;
    }
    /**
     * List of AP MAC which wants to move. Maximum of AP MACs: 50.
     *
     * @param list<string> $apMacs
     *
     * @return self
     */
    public function setApMacs(array $apMacs): self
    {
        $this->initialized['apMacs'] = true;
        $this->apMacs = $apMacs;
        return $this;
    }
}