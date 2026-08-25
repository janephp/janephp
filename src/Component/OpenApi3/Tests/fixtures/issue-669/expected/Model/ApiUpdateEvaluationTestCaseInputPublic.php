<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateEvaluationTestCaseInputPublic implements AdditionalPropertiesInterface
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
     * Dataset against which the test‑case is executed.
     *
     * @var string
     */
    protected $datasetUuid;
    /**
     * Description of the test case.
     *
     * @var string
     */
    protected $description;
    /**
     * @var ApiEvaluationTestCaseMetricList
     */
    protected $metrics;
    /**
     * Name of the test case.
     *
     * @var string
     */
    protected $name;
    /**
     * @var ApiStarMetric
     */
    protected $starMetric;
    /**
     * Test-case UUID to update
     *
     * @var string
     */
    protected $testCaseUuid;
    /**
     * Dataset against which the test‑case is executed.
     *
     * @return string
     */
    public function getDatasetUuid(): string
    {
        return $this->datasetUuid;
    }
    /**
     * Dataset against which the test‑case is executed.
     *
     * @param string $datasetUuid
     *
     * @return self
     */
    public function setDatasetUuid(string $datasetUuid): self
    {
        $this->initialized['datasetUuid'] = true;
        $this->datasetUuid = $datasetUuid;
        return $this;
    }
    /**
     * Description of the test case.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the test case.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return ApiEvaluationTestCaseMetricList
     */
    public function getMetrics(): ApiEvaluationTestCaseMetricList
    {
        return $this->metrics;
    }
    /**
     * @param ApiEvaluationTestCaseMetricList $metrics
     *
     * @return self
     */
    public function setMetrics(ApiEvaluationTestCaseMetricList $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * Name of the test case.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the test case.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return ApiStarMetric
     */
    public function getStarMetric(): ApiStarMetric
    {
        return $this->starMetric;
    }
    /**
     * @param ApiStarMetric $starMetric
     *
     * @return self
     */
    public function setStarMetric(ApiStarMetric $starMetric): self
    {
        $this->initialized['starMetric'] = true;
        $this->starMetric = $starMetric;
        return $this;
    }
    /**
     * Test-case UUID to update
     *
     * @return string
     */
    public function getTestCaseUuid(): string
    {
        return $this->testCaseUuid;
    }
    /**
     * Test-case UUID to update
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
        return ['datasetUuid' => ['dataset_uuid', 'getDatasetUuid', 'setDatasetUuid'], 'description' => ['description', 'getDescription', 'setDescription'], 'metrics' => ['metrics', 'getMetrics', 'setMetrics'], 'name' => ['name', 'getName', 'setName'], 'starMetric' => ['star_metric', 'getStarMetric', 'setStarMetric'], 'testCaseUuid' => ['test_case_uuid', 'getTestCaseUuid', 'setTestCaseUuid']];
    }
}