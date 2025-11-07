<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppIngressSpecRuleMatch extends \ArrayObject
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
     * The path to match on.
     *
     * @var AppIngressSpecRuleStringMatchPrefix
     */
    protected $path;
    /**
     * The authority to match on.
     *
     * @var AppIngressSpecRuleStringMatchExact
     */
    protected $authority;
    /**
     * The path to match on.
     *
     * @return AppIngressSpecRuleStringMatchPrefix
     */
    public function getPath(): AppIngressSpecRuleStringMatchPrefix
    {
        return $this->path;
    }
    /**
     * The path to match on.
     *
     * @param AppIngressSpecRuleStringMatchPrefix $path
     *
     * @return self
     */
    public function setPath(AppIngressSpecRuleStringMatchPrefix $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The authority to match on.
     *
     * @return AppIngressSpecRuleStringMatchExact
     */
    public function getAuthority(): AppIngressSpecRuleStringMatchExact
    {
        return $this->authority;
    }
    /**
     * The authority to match on.
     *
     * @param AppIngressSpecRuleStringMatchExact $authority
     *
     * @return self
     */
    public function setAuthority(AppIngressSpecRuleStringMatchExact $authority): self
    {
        $this->initialized['authority'] = true;
        $this->authority = $authority;
        return $this;
    }
}