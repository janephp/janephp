<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiGetKnowledgeBaseIndexingJobOutput extends \ArrayObject
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
     * IndexingJob description
     *
     * @var ApiIndexingJob
     */
    protected $job;
    /**
     * IndexingJob description
     *
     * @return ApiIndexingJob
     */
    public function getJob(): ApiIndexingJob
    {
        return $this->job;
    }
    /**
     * IndexingJob description
     *
     * @param ApiIndexingJob $job
     *
     * @return self
     */
    public function setJob(ApiIndexingJob $job): self
    {
        $this->initialized['job'] = true;
        $this->job = $job;
        return $this;
    }
}