<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\AdditionalPropertiesInterface;
class ResponseProblemDetailsResponse500 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * http or custom status code corresponding to this operation
     *
     * @var int
     */
    public int $status;
    /**
     * http or custom status message corresponding to this operation
     *
     * @var string
     */
    public string $title;
    /**
     * Explanation for the status.
     *
     * @var string
     */
    public string $type;
    /**
     * More details about the error.
     *
     * @var string
     */
    public string $detail;
    public function definedProperties(): array
    {
        return ['status' => 'status', 'title' => 'title', 'type' => 'type', 'detail' => 'detail'];
    }
}