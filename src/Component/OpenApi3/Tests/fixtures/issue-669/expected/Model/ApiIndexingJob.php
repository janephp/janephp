<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiIndexingJob implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of datasources indexed completed
     *
     * @var int
     */
    public int $completedDatasources;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Details on Data Sources included in the Indexing Job
     *
     * @var list<ApiIndexedDataSource>
     */
    public array $dataSourceJobs;
    /**
     * @var list<string>
     */
    public array $dataSourceUuids;
    /**
     * @var \DateTime
     */
    public \DateTime $finishedAt;
    /**
     * Boolean value to determine if the indexing job details are available
     *
     * @var bool
     */
    public bool $isReportAvailable;
    /**
     * Knowledge base id
     *
     * @var string
     */
    public string $knowledgeBaseUuid;
    /**
     * @var string
     */
    public string $phase = 'BATCH_JOB_PHASE_UNKNOWN';
    /**
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * @var string
     */
    public string $status = 'INDEX_JOB_STATUS_UNKNOWN';
    /**
     * Number of tokens [This field is deprecated]
     *
     * @var int
     */
    public int $tokens;
    /**
     * Number of datasources being indexed
     *
     * @var int
     */
    public int $totalDatasources;
    /**
     * Total Tokens Consumed By the Indexing Job
     *
     * @var string
     */
    public string $totalTokens;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Unique id
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['completedDatasources' => 'completed_datasources', 'createdAt' => 'created_at', 'dataSourceJobs' => 'data_source_jobs', 'dataSourceUuids' => 'data_source_uuids', 'finishedAt' => 'finished_at', 'isReportAvailable' => 'is_report_available', 'knowledgeBaseUuid' => 'knowledge_base_uuid', 'phase' => 'phase', 'startedAt' => 'started_at', 'status' => 'status', 'tokens' => 'tokens', 'totalDatasources' => 'total_datasources', 'totalTokens' => 'total_tokens', 'updatedAt' => 'updated_at', 'uuid' => 'uuid'];
    }
}