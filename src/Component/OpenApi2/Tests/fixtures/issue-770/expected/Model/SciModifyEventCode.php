<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SciModifyEventCode
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
     * @var list<int>
     */
    protected $sciAcceptedEventCodes;
    /**
     * @return list<int>
     */
    public function getSciAcceptedEventCodes(): array
    {
        return $this->sciAcceptedEventCodes;
    }
    /**
     * @param list<int> $sciAcceptedEventCodes
     *
     * @return self
     */
    public function setSciAcceptedEventCodes(array $sciAcceptedEventCodes): self
    {
        $this->initialized['sciAcceptedEventCodes'] = true;
        $this->sciAcceptedEventCodes = $sciAcceptedEventCodes;
        return $this;
    }
}