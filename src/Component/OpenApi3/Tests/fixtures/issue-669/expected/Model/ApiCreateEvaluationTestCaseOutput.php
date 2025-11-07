<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateEvaluationTestCaseOutput extends \ArrayObject
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
     * Test‑case UUID.
     *
     * @var string
     */
    protected $testCaseUuid;
    /**
     * Test‑case UUID.
     *
     * @return string
     */
    public function getTestCaseUuid(): string
    {
        return $this->testCaseUuid;
    }
    /**
     * Test‑case UUID.
     *
     * @param string $testCaseUuid
     *
     * @return self
     */
    public function setTestCaseUuid(string $testCaseUuid): self
    {
        $this->initialized['testCaseUuid'] = true;
        $this->testCaseUuid = $testCaseUuid;
        return $this;
    }
}