<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SocialMediaLoginProfileWhitelistedDomain
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
     * @var string
     */
    protected $domain;
    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }
    /**
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
}