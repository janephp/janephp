<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRbacMetadata
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
     * @var list<CommonRbacMetadataRbacMetadataItem>
     */
    protected $rbacMetadata;
    /**
     * @return list<CommonRbacMetadataRbacMetadataItem>
     */
    public function getRbacMetadata(): array
    {
        return $this->rbacMetadata;
    }
    /**
     * @param list<CommonRbacMetadataRbacMetadataItem> $rbacMetadata
     *
     * @return self
     */
    public function setRbacMetadata(array $rbacMetadata): self
    {
        $this->initialized['rbacMetadata'] = true;
        $this->rbacMetadata = $rbacMetadata;
        return $this;
    }
}