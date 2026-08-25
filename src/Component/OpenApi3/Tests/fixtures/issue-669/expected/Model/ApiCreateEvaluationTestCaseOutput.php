<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationTestCaseOutput implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['testCaseUuid' => ['test_case_uuid', 'getTestCaseUuid', 'setTestCaseUuid']];
    }
}