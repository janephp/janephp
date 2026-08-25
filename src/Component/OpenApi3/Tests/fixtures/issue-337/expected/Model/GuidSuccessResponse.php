<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GuidSuccessResponse implements AdditionalPropertiesInterface
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
     * @var list<GuidSuccessResponseGUIDListItem>
     */
    protected $gUIDList;
    /**
     * @return list<GuidSuccessResponseGUIDListItem>
     */
    public function getGUIDList(): array
    {
        return $this->gUIDList;
    }
    /**
     * @param list<GuidSuccessResponseGUIDListItem> $gUIDList
     *
     * @return self
     */
    public function setGUIDList(array $gUIDList): self
    {
        $this->initialized['gUIDList'] = true;
        $this->gUIDList = $gUIDList;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['gUIDList' => ['GUIDList', 'getGUIDList', 'setGUIDList']];
    }
}