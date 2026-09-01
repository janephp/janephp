<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiWorkspace implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agents
     *
     * @var list<ApiAgent>
     */
    public array $agents;
    /**
     * Creation date
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The id of user who created this workspace
     *
     * @var string
     */
    public string $createdBy;
    /**
     * The email of the user who created this workspace
     *
     * @var string
     */
    public string $createdByEmail;
    /**
     * Deleted date
     *
     * @var \DateTime
     */
    public \DateTime $deletedAt;
    /**
     * Description of the workspace
     *
     * @var string
     */
    public string $description;
    /**
     * Evaluations
     *
     * @var list<ApiEvaluationTestCase>
     */
    public array $evaluationTestCases;
    /**
     * Name of the workspace
     *
     * @var string
     */
    public string $name;
    /**
     * Update date
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
        return ['agents' => 'agents', 'createdAt' => 'created_at', 'createdBy' => 'created_by', 'createdByEmail' => 'created_by_email', 'deletedAt' => 'deleted_at', 'description' => 'description', 'evaluationTestCases' => 'evaluation_test_cases', 'name' => 'name', 'updatedAt' => 'updated_at', 'uuid' => 'uuid'];
    }
}