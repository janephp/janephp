<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocations implements AdditionalPropertiesInterface
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
     * @var list<AppJobInvocation>
     */
    protected $jobInvocations;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @return list<AppJobInvocation>
     */
    public function getJobInvocations(): array
    {
        return $this->jobInvocations;
    }
    /**
     * @param list<AppJobInvocation> $jobInvocations
     *
     * @return self
     */
    public function setJobInvocations(array $jobInvocations): self
    {
        $this->initialized['jobInvocations'] = true;
        $this->jobInvocations = $jobInvocations;
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
    public function definedProperties(): array
    {
        return ['jobInvocations' => ['job_invocations', 'getJobInvocations', 'setJobInvocations'], 'links' => ['links', 'getLinks', 'setLinks']];
    }
}