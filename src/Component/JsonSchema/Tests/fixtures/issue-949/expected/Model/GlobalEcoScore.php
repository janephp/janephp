<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class GlobalEcoScore
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
     * @var list<string>|null
     */
    protected $emissionFactors;
    /**
     * @var string
     */
    protected $tracingId;
    /**
     * @return list<string>|null
     */
    public function getEmissionFactors(): ?array
    {
        return $this->emissionFactors;
    }
    /**
     * @param list<string>|null $emissionFactors
     *
     * @return self
     */
    public function setEmissionFactors(?array $emissionFactors): self
    {
        $this->initialized['emissionFactors'] = true;
        $this->emissionFactors = $emissionFactors;
        return $this;
    }
    /**
     * @return string
     */
    public function getTracingId(): string
    {
        return $this->tracingId;
    }
    /**
     * @param string $tracingId
     *
     * @return self
     */
    public function setTracingId(string $tracingId): self
    {
        $this->initialized['tracingId'] = true;
        $this->tracingId = $tracingId;
        return $this;
    }
}