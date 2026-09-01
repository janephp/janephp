<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListOpenAIAPIKeysOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Api key infos
     *
     * @var list<ApiOpenAIAPIKeyInfo>
     */
    public array $apiKeyInfos;
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
        return ['apiKeyInfos' => 'api_key_infos', 'links' => 'links', 'meta' => 'meta'];
    }
}