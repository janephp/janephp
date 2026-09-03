<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\AdditionalPropertiesInterface;
class ResponseProblemDetailsResponse400 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $status;
    /**
     * @var string
     */
    public string $title;
    /**
     * @var string
     */
    public string $type = 'about:blank';
    /**
     * @var string
     */
    public string $detail;
    public function definedProperties(): array
    {
        return ['status' => 'status', 'title' => 'title', 'type' => 'type', 'detail' => 'detail'];
    }
}