<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationTestCase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var \DateTime
     */
    public \DateTime $archivedAt;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var string
     */
    public string $createdByUserEmail;
    /**
     * @var string
     */
    public string $createdByUserId;
    /**
     * @var ApiEvaluationDataset
     */
    public ApiEvaluationDataset $dataset;
    /**
     * @var string
     */
    public string $datasetName;
    /**
     * @var string
     */
    public string $datasetUuid;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var int
     */
    public int $latestVersionNumberOfRuns;
    /**
     * @var list<ApiEvaluationMetric>
     */
    public array $metrics;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var ApiStarMetric
     */
    public ApiStarMetric $starMetric;
    /**
     * @var string
     */
    public string $testCaseUuid;
    /**
     * @var int
     */
    public int $totalRuns;
    /**
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * @var string
     */
    public string $updatedByUserEmail;
    /**
     * @var string
     */
    public string $updatedByUserId;
    /**
     * @var int
     */
    public int $version;
    public function definedProperties(): array
    {
        return ['archivedAt' => 'archived_at', 'createdAt' => 'created_at', 'createdByUserEmail' => 'created_by_user_email', 'createdByUserId' => 'created_by_user_id', 'dataset' => 'dataset', 'datasetName' => 'dataset_name', 'datasetUuid' => 'dataset_uuid', 'description' => 'description', 'latestVersionNumberOfRuns' => 'latest_version_number_of_runs', 'metrics' => 'metrics', 'name' => 'name', 'starMetric' => 'star_metric', 'testCaseUuid' => 'test_case_uuid', 'totalRuns' => 'total_runs', 'updatedAt' => 'updated_at', 'updatedByUserEmail' => 'updated_by_user_email', 'updatedByUserId' => 'updated_by_user_id', 'version' => 'version'];
    }
}