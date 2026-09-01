<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model\Admin\Reports;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class NamespacedReportGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $title;
    public function definedProperties(): array
    {
        return ['title' => 'title'];
    }
}