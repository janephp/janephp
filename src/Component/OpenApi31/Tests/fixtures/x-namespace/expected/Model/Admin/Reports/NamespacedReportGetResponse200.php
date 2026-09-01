<?php

namespace Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\Admin\Reports;

use Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\AdditionalPropertiesInterface;
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