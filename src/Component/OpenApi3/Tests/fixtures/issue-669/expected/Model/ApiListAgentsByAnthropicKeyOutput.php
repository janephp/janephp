<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListAgentsByAnthropicKeyOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ApiAgent>
     */
    public array $agents;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    public ApiLinks $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    public ApiMeta $meta;
    public function definedProperties(): array
    {
        return ['agents' => 'agents', 'links' => 'links', 'meta' => 'meta'];
    }
}