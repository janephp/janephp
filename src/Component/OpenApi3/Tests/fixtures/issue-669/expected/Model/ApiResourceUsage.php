<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiResourceUsage extends \ArrayObject
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
     * @var list<ApiUsageMeasurement>
     */
    protected $measurements;
    /**
     * @var string
     */
    protected $resourceUuid;
    /**
     * @var \DateTime
     */
    protected $start;
    /**
     * @var \DateTime
     */
    protected $stop;
    /**
     * @return list<ApiUsageMeasurement>
     */
    public function getMeasurements(): array
    {
        return $this->measurements;
    }
    /**
     * @param list<ApiUsageMeasurement> $measurements
     *
     * @return self
     */
    public function setMeasurements(array $measurements): self
    {
        $this->initialized['measurements'] = true;
        $this->measurements = $measurements;
        return $this;
    }
    /**
     * @return string
     */
    public function getResourceUuid(): string
    {
        return $this->resourceUuid;
    }
    /**
     * @param string $resourceUuid
     *
     * @return self
     */
    public function setResourceUuid(string $resourceUuid): self
    {
        $this->initialized['resourceUuid'] = true;
        $this->resourceUuid = $resourceUuid;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }
    /**
     * @param \DateTime $start
     *
     * @return self
     */
    public function setStart(\DateTime $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getStop(): \DateTime
    {
        return $this->stop;
    }
    /**
     * @param \DateTime $stop
     *
     * @return self
     */
    public function setStop(\DateTime $stop): self
    {
        $this->initialized['stop'] = true;
        $this->stop = $stop;
        return $this;
    }
}