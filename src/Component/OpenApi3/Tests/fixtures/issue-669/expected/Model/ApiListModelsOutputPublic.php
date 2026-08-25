<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListModelsOutputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    protected $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    protected $meta;
    /**
     * The models
     *
     * @var list<ApiModelPublic>
     */
    protected $models;
    /**
     * Links to other pages
     *
     * @return ApiLinks
     */
    public function getLinks(): ApiLinks
    {
        return $this->links;
    }
    /**
     * Links to other pages
     *
     * @param ApiLinks $links
     *
     * @return self
     */
    public function setLinks(ApiLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * Meta information about the data set
     *
     * @return ApiMeta
     */
    public function getMeta(): ApiMeta
    {
        return $this->meta;
    }
    /**
     * Meta information about the data set
     *
     * @param ApiMeta $meta
     *
     * @return self
     */
    public function setMeta(ApiMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    /**
     * The models
     *
     * @return list<ApiModelPublic>
     */
    public function getModels(): array
    {
        return $this->models;
    }
    /**
     * The models
     *
     * @param list<ApiModelPublic> $models
     *
     * @return self
     */
    public function setModels(array $models): self
    {
        $this->initialized['models'] = true;
        $this->models = $models;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta'], 'models' => ['models', 'getModels', 'setModels']];
    }
}