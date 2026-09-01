<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocations implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<AppJobInvocation>
     */
    public array $jobInvocations;
    /**
     * @var PageLinks
     */
    public PageLinks $links;
    public function definedProperties(): array
    {
        return ['jobInvocations' => 'job_invocations', 'links' => 'links'];
    }
}