<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiWorkspace implements AdditionalPropertiesInterface
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
     * Agents
     *
     * @var list<ApiAgent>
     */
    protected $agents;
    /**
     * Creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The id of user who created this workspace
     *
     * @var string
     */
    protected $createdBy;
    /**
     * The email of the user who created this workspace
     *
     * @var string
     */
    protected $createdByEmail;
    /**
     * Deleted date
     *
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * Description of the workspace
     *
     * @var string
     */
    protected $description;
    /**
     * Evaluations
     *
     * @var list<ApiEvaluationTestCase>
     */
    protected $evaluationTestCases;
    /**
     * Name of the workspace
     *
     * @var string
     */
    protected $name;
    /**
     * Update date
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
     * Agents
     *
     * @return list<ApiAgent>
     */
    public function getAgents(): array
    {
        return $this->agents;
    }
    /**
     * Agents
     *
     * @param list<ApiAgent> $agents
     *
     * @return self
     */
    public function setAgents(array $agents): self
    {
        $this->initialized['agents'] = true;
        $this->agents = $agents;
        return $this;
    }
    /**
     * Creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date
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
     * The id of user who created this workspace
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * The id of user who created this workspace
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * The email of the user who created this workspace
     *
     * @return string
     */
    public function getCreatedByEmail(): string
    {
        return $this->createdByEmail;
    }
    /**
     * The email of the user who created this workspace
     *
     * @param string $createdByEmail
     *
     * @return self
     */
    public function setCreatedByEmail(string $createdByEmail): self
    {
        $this->initialized['createdByEmail'] = true;
        $this->createdByEmail = $createdByEmail;
        return $this;
    }
    /**
     * Deleted date
     *
     * @return \DateTime
     */
    public function getDeletedAt(): \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * Deleted date
     *
     * @param \DateTime $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * Description of the workspace
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the workspace
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
     * Evaluations
     *
     * @return list<ApiEvaluationTestCase>
     */
    public function getEvaluationTestCases(): array
    {
        return $this->evaluationTestCases;
    }
    /**
     * Evaluations
     *
     * @param list<ApiEvaluationTestCase> $evaluationTestCases
     *
     * @return self
     */
    public function setEvaluationTestCases(array $evaluationTestCases): self
    {
        $this->initialized['evaluationTestCases'] = true;
        $this->evaluationTestCases = $evaluationTestCases;
        return $this;
    }
    /**
     * Name of the workspace
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the workspace
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
     * Update date
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Update date
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
        return ['agents' => ['agents', 'getAgents', 'setAgents'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'createdBy' => ['created_by', 'getCreatedBy', 'setCreatedBy'], 'createdByEmail' => ['created_by_email', 'getCreatedByEmail', 'setCreatedByEmail'], 'deletedAt' => ['deleted_at', 'getDeletedAt', 'setDeletedAt'], 'description' => ['description', 'getDescription', 'setDescription'], 'evaluationTestCases' => ['evaluation_test_cases', 'getEvaluationTestCases', 'setEvaluationTestCases'], 'name' => ['name', 'getName', 'setName'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'uuid' => ['uuid', 'getUuid', 'setUuid']];
    }
}