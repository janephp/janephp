<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiIndexingJob implements AdditionalPropertiesInterface
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
     * Number of datasources indexed completed
     *
     * @var int
     */
    protected $completedDatasources;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Details on Data Sources included in the Indexing Job
     *
     * @var list<ApiIndexedDataSource>
     */
    protected $dataSourceJobs;
    /**
     * @var list<string>
     */
    protected $dataSourceUuids;
    /**
     * @var \DateTime
     */
    protected $finishedAt;
    /**
     * Boolean value to determine if the indexing job details are available
     *
     * @var bool
     */
    protected $isReportAvailable;
    /**
     * Knowledge base id
     *
     * @var string
     */
    protected $knowledgeBaseUuid;
    /**
     * @var string
     */
    protected $phase = 'BATCH_JOB_PHASE_UNKNOWN';
    /**
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var string
     */
    protected $status = 'INDEX_JOB_STATUS_UNKNOWN';
    /**
     * Number of tokens [This field is deprecated]
     *
     * @var int
     */
    protected $tokens;
    /**
     * Number of datasources being indexed
     *
     * @var int
     */
    protected $totalDatasources;
    /**
     * Total Tokens Consumed By the Indexing Job
     *
     * @var string
     */
    protected $totalTokens;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique id
     *
     * @var string
     */
    protected $uuid;
    /**
     * Number of datasources indexed completed
     *
     * @return int
     */
    public function getCompletedDatasources(): int
    {
        return $this->completedDatasources;
    }
    /**
     * Number of datasources indexed completed
     *
     * @param int $completedDatasources
     *
     * @return self
     */
    public function setCompletedDatasources(int $completedDatasources): self
    {
        $this->initialized['completedDatasources'] = true;
        $this->completedDatasources = $completedDatasources;
        return $this;
    }
    /**
     * Creation date / time
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date / time
     *
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
     * Details on Data Sources included in the Indexing Job
     *
     * @return list<ApiIndexedDataSource>
     */
    public function getDataSourceJobs(): array
    {
        return $this->dataSourceJobs;
    }
    /**
     * Details on Data Sources included in the Indexing Job
     *
     * @param list<ApiIndexedDataSource> $dataSourceJobs
     *
     * @return self
     */
    public function setDataSourceJobs(array $dataSourceJobs): self
    {
        $this->initialized['dataSourceJobs'] = true;
        $this->dataSourceJobs = $dataSourceJobs;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDataSourceUuids(): array
    {
        return $this->dataSourceUuids;
    }
    /**
     * @param list<string> $dataSourceUuids
     *
     * @return self
     */
    public function setDataSourceUuids(array $dataSourceUuids): self
    {
        $this->initialized['dataSourceUuids'] = true;
        $this->dataSourceUuids = $dataSourceUuids;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getFinishedAt(): \DateTime
    {
        return $this->finishedAt;
    }
    /**
     * @param \DateTime $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * Boolean value to determine if the indexing job details are available
     *
     * @return bool
     */
    public function getIsReportAvailable(): bool
    {
        return $this->isReportAvailable;
    }
    /**
     * Boolean value to determine if the indexing job details are available
     *
     * @param bool $isReportAvailable
     *
     * @return self
     */
    public function setIsReportAvailable(bool $isReportAvailable): self
    {
        $this->initialized['isReportAvailable'] = true;
        $this->isReportAvailable = $isReportAvailable;
        return $this;
    }
    /**
     * Knowledge base id
     *
     * @return string
     */
    public function getKnowledgeBaseUuid(): string
    {
        return $this->knowledgeBaseUuid;
    }
    /**
     * Knowledge base id
     *
     * @param string $knowledgeBaseUuid
     *
     * @return self
     */
    public function setKnowledgeBaseUuid(string $knowledgeBaseUuid): self
    {
        $this->initialized['knowledgeBaseUuid'] = true;
        $this->knowledgeBaseUuid = $knowledgeBaseUuid;
        return $this;
    }
    /**
     * @return string
     */
    public function getPhase(): string
    {
        return $this->phase;
    }
    /**
     * @param string $phase
     *
     * @return self
     */
    public function setPhase(string $phase): self
    {
        $this->initialized['phase'] = true;
        $this->phase = $phase;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Number of tokens [This field is deprecated]
     *
     * @return int
     */
    public function getTokens(): int
    {
        return $this->tokens;
    }
    /**
     * Number of tokens [This field is deprecated]
     *
     * @param int $tokens
     *
     * @return self
     */
    public function setTokens(int $tokens): self
    {
        $this->initialized['tokens'] = true;
        $this->tokens = $tokens;
        return $this;
    }
    /**
     * Number of datasources being indexed
     *
     * @return int
     */
    public function getTotalDatasources(): int
    {
        return $this->totalDatasources;
    }
    /**
     * Number of datasources being indexed
     *
     * @param int $totalDatasources
     *
     * @return self
     */
    public function setTotalDatasources(int $totalDatasources): self
    {
        $this->initialized['totalDatasources'] = true;
        $this->totalDatasources = $totalDatasources;
        return $this;
    }
    /**
     * Total Tokens Consumed By the Indexing Job
     *
     * @return string
     */
    public function getTotalTokens(): string
    {
        return $this->totalTokens;
    }
    /**
     * Total Tokens Consumed By the Indexing Job
     *
     * @param string $totalTokens
     *
     * @return self
     */
    public function setTotalTokens(string $totalTokens): self
    {
        $this->initialized['totalTokens'] = true;
        $this->totalTokens = $totalTokens;
        return $this;
    }
    /**
     * Last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last modified
     *
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
     * Unique id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['completedDatasources' => ['completed_datasources', 'getCompletedDatasources', 'setCompletedDatasources'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'dataSourceJobs' => ['data_source_jobs', 'getDataSourceJobs', 'setDataSourceJobs'], 'dataSourceUuids' => ['data_source_uuids', 'getDataSourceUuids', 'setDataSourceUuids'], 'finishedAt' => ['finished_at', 'getFinishedAt', 'setFinishedAt'], 'isReportAvailable' => ['is_report_available', 'getIsReportAvailable', 'setIsReportAvailable'], 'knowledgeBaseUuid' => ['knowledge_base_uuid', 'getKnowledgeBaseUuid', 'setKnowledgeBaseUuid'], 'phase' => ['phase', 'getPhase', 'setPhase'], 'startedAt' => ['started_at', 'getStartedAt', 'setStartedAt'], 'status' => ['status', 'getStatus', 'setStatus'], 'tokens' => ['tokens', 'getTokens', 'setTokens'], 'totalDatasources' => ['total_datasources', 'getTotalDatasources', 'setTotalDatasources'], 'totalTokens' => ['total_tokens', 'getTotalTokens', 'setTotalTokens'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}