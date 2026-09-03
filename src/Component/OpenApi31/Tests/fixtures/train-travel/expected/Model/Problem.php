<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class Problem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A URI reference that identifies the problem type
     *
     * @var string
     */
    public string $type;
    /**
     * A short, human-readable summary of the problem type
     *
     * @var string
     */
    public string $title;
    /**
     * A human-readable explanation specific to this occurrence of the problem
     *
     * @var string
     */
    public string $detail;
    /**
     * A URI reference that identifies the specific occurrence of the problem
     *
     * @var string
     */
    public string $instance;
    /**
     * The HTTP status code
     *
     * @var int
     */
    public int $status;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'title' => 'title', 'detail' => 'detail', 'instance' => 'instance', 'status' => 'status'];
    }
}