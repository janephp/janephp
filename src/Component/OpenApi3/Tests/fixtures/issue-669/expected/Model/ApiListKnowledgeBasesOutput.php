<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListKnowledgeBasesOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The knowledge bases
     *
     * @var list<ApiKnowledgeBase>
     */
    public array $knowledgeBases;
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
        return ['knowledgeBases' => 'knowledge_bases', 'links' => 'links', 'meta' => 'meta'];
    }
}