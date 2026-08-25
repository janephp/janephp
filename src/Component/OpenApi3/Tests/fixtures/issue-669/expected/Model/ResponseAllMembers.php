<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllMembers implements AdditionalPropertiesInterface
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
     * @var list<Member>
     */
    protected $droplets;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<Member>
     */
    public function getDroplets(): array
    {
        return $this->droplets;
    }
    /**
     * @param list<Member> $droplets
     *
     * @return self
     */
    public function setDroplets(array $droplets): self
    {
        $this->initialized['droplets'] = true;
        $this->droplets = $droplets;
        return $this;
    }
    /**
     * @return PageLinks
     */
    public function getLinks(): PageLinks
    {
        return $this->links;
    }
    /**
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return MetaMeta
     */
    public function getMeta(): MetaMeta
    {
        return $this->meta;
    }
    /**
     * @param MetaMeta $meta
     *
     * @return self
     */
    public function setMeta(MetaMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['droplets' => ['droplets', 'getDroplets', 'setDroplets'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}