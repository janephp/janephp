<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllPartnerAttachmentRemoteRoutes extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<PartnerAttachmentRemoteRoute>
     */
    protected $remoteRoutes;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<PartnerAttachmentRemoteRoute>
     */
    public function getRemoteRoutes(): array
    {
        return $this->remoteRoutes;
    }
    /**
     * @param list<PartnerAttachmentRemoteRoute> $remoteRoutes
     *
     * @return self
     */
    public function setRemoteRoutes(array $remoteRoutes): self
    {
        $this->initialized['remoteRoutes'] = true;
        $this->remoteRoutes = $remoteRoutes;
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
}