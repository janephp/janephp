<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationTestCase implements AdditionalPropertiesInterface
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
     * @var \DateTime
     */
    protected $archivedAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $createdByUserEmail;
    /**
     * @var string
     */
    protected $createdByUserId;
    /**
     * @var ApiEvaluationDataset
     */
    protected $dataset;
    /**
     * @var string
     */
    protected $datasetName;
    /**
     * @var string
     */
    protected $datasetUuid;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $latestVersionNumberOfRuns;
    /**
     * @var list<ApiEvaluationMetric>
     */
    protected $metrics;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var ApiStarMetric
     */
    protected $starMetric;
    /**
     * @var string
     */
    protected $testCaseUuid;
    /**
     * @var int
     */
    protected $totalRuns;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $updatedByUserEmail;
    /**
     * @var string
     */
    protected $updatedByUserId;
    /**
     * @var int
     */
    protected $version;
    /**
     * @return \DateTime
     */
    public function getArchivedAt(): \DateTime
    {
        return $this->archivedAt;
    }
    /**
     * @param \DateTime $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(\DateTime $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedByUserEmail(): string
    {
        return $this->createdByUserEmail;
    }
    /**
     * @param string $createdByUserEmail
     *
     * @return self
     */
    public function setCreatedByUserEmail(string $createdByUserEmail): self
    {
        $this->initialized['createdByUserEmail'] = true;
        $this->createdByUserEmail = $createdByUserEmail;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedByUserId(): string
    {
        return $this->createdByUserId;
    }
    /**
     * @param string $createdByUserId
     *
     * @return self
     */
    public function setCreatedByUserId(string $createdByUserId): self
    {
        $this->initialized['createdByUserId'] = true;
        $this->createdByUserId = $createdByUserId;
        return $this;
    }
    /**
     * @return ApiEvaluationDataset
     */
    public function getDataset(): ApiEvaluationDataset
    {
        return $this->dataset;
    }
    /**
     * @param ApiEvaluationDataset $dataset
     *
     * @return self
     */
    public function setDataset(ApiEvaluationDataset $dataset): self
    {
        $this->initialized['dataset'] = true;
        $this->dataset = $dataset;
        return $this;
    }
    /**
     * @return string
     */
    public function getDatasetName(): string
    {
        return $this->datasetName;
    }
    /**
     * @param string $datasetName
     *
     * @return self
     */
    public function setDatasetName(string $datasetName): self
    {
        $this->initialized['datasetName'] = true;
        $this->datasetName = $datasetName;
        return $this;
    }
    /**
     * @return string
     */
    public function getDatasetUuid(): string
    {
        return $this->datasetUuid;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
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
     * @return int
     */
    public function getLatestVersionNumberOfRuns(): int
    {
        return $this->latestVersionNumberOfRuns;
    }
    /**
     * @param int $latestVersionNumberOfRuns
     *
     * @return self
     */
    public function setLatestVersionNumberOfRuns(int $latestVersionNumberOfRuns): self
    {
        $this->initialized['latestVersionNumberOfRuns'] = true;
        $this->latestVersionNumberOfRuns = $latestVersionNumberOfRuns;
        return $this;
    }
    /**
     * @return list<ApiEvaluationMetric>
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }
    /**
     * @param list<ApiEvaluationMetric> $metrics
     *
     * @return self
     */
    public function setMetrics(array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return int
     */
    public function getTotalRuns(): int
    {
        return $this->totalRuns;
    }
    /**
     * @param int $totalRuns
     *
     * @return self
     */
    public function setTotalRuns(int $totalRuns): self
    {
        $this->initialized['totalRuns'] = true;
        $this->totalRuns = $totalRuns;
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
     * @return string
     */
    public function getUpdatedByUserEmail(): string
    {
        return $this->updatedByUserEmail;
    }
    /**
     * @param string $updatedByUserEmail
     *
     * @return self
     */
    public function setUpdatedByUserEmail(string $updatedByUserEmail): self
    {
        $this->initialized['updatedByUserEmail'] = true;
        $this->updatedByUserEmail = $updatedByUserEmail;
        return $this;
    }
    /**
     * @return string
     */
    public function getUpdatedByUserId(): string
    {
        return $this->updatedByUserId;
    }
    /**
     * @param string $updatedByUserId
     *
     * @return self
     */
    public function setUpdatedByUserId(string $updatedByUserId): self
    {
        $this->initialized['updatedByUserId'] = true;
        $this->updatedByUserId = $updatedByUserId;
        return $this;
    }
    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }
    /**
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
    public function definedProperties(): array
    {
        return ['archivedAt' => ['archived_at', 'getArchivedAt', 'setArchivedAt'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'createdByUserEmail' => ['created_by_user_email', 'getCreatedByUserEmail', 'setCreatedByUserEmail'], 'createdByUserId' => ['created_by_user_id', 'getCreatedByUserId', 'setCreatedByUserId'], 'dataset' => ['dataset', 'getDataset', 'setDataset'], 'datasetName' => ['dataset_name', 'getDatasetName', 'setDatasetName'], 'datasetUuid' => ['dataset_uuid', 'getDatasetUuid', 'setDatasetUuid'], 'description' => ['description', 'getDescription', 'setDescription'], 'latestVersionNumberOfRuns' => ['latest_version_number_of_runs', 'getLatestVersionNumberOfRuns', 'setLatestVersionNumberOfRuns'], 'metrics' => ['metrics', 'getMetrics', 'setMetrics'], 'name' => ['name', 'getName', 'setName'], 'starMetric' => ['star_metric', 'getStarMetric', 'setStarMetric'], 'testCaseUuid' => ['test_case_uuid', 'getTestCaseUuid', 'setTestCaseUuid'], 'totalRuns' => ['total_runs', 'getTotalRuns', 'setTotalRuns'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'updatedByUserEmail' => ['updated_by_user_email', 'getUpdatedByUserEmail', 'setUpdatedByUserEmail'], 'updatedByUserId' => ['updated_by_user_id', 'getUpdatedByUserId', 'setUpdatedByUserId'], 'version' => ['version', 'getVersion', 'setVersion']];
    }
}