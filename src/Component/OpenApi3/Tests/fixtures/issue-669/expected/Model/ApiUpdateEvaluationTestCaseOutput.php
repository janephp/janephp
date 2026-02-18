<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateEvaluationTestCaseOutput extends \ArrayObject
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
    protected $testCaseUuid;
    /**
     * The new verson of the test case.
     *
     * @var int
     */
    protected $version;
    /**
     * @return string
     */
    public function getTestCaseUuid(): string
    {
        return $this->testCaseUuid;
    }
    /**
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
    /**
     * The new verson of the test case.
     *
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }
    /**
     * The new verson of the test case.
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}