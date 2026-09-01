<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateEvaluationTestCaseInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Dataset against which the test‑case is executed.
     *
     * @var string
     */
    public string $datasetUuid;
    /**
     * Description of the test case.
     *
     * @var string
     */
    public string $description;
    /**
     * @var ApiEvaluationTestCaseMetricList
     */
    public ApiEvaluationTestCaseMetricList $metrics;
    /**
     * Name of the test case.
     *
     * @var string
     */
    public string $name;
    /**
     * @var ApiStarMetric
     */
    public ApiStarMetric $starMetric;
    /**
     * Test-case UUID to update
     *
     * @var string
     */
    public string $testCaseUuid;
    public function definedProperties(): array
    {
        return ['datasetUuid' => 'dataset_uuid', 'description' => 'description', 'metrics' => 'metrics', 'name' => 'name', 'starMetric' => 'star_metric', 'testCaseUuid' => 'test_case_uuid'];
    }
}