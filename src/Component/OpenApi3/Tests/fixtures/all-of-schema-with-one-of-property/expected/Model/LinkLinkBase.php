<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class LinkLinkBase
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
    protected $discriminator;
    /**
     * @return string
     */
    public function getDiscriminator(): string
    {
        return $this->discriminator;
    }
    /**
     * @param string $discriminator
     */
    public function setDiscriminator(string $discriminator)
    {
        $this->initialized['discriminator'] = true;
        $this->discriminator = $discriminator;
    }
}