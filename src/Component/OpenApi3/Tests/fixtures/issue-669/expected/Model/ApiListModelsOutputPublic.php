<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListModelsOutputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    /**
     * The models
     *
     * @var list<ApiModelPublic>
     */
    public array $models;
    public function definedProperties(): array
    {
        return ['links' => 'links', 'meta' => 'meta', 'models' => 'models'];
    }
}