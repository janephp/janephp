<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $matchID;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return int
     */
    public function getMatchID(): int
    {
        return $this->matchID;
    }
    /**
     * @param int $matchID
     *
     * @return self
     */
    public function setMatchID(int $matchID): self
    {
        $this->initialized['matchID'] = true;
        $this->matchID = $matchID;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['matchID' => ['matchID', 'getMatchID', 'setMatchID'], 'type' => ['type', 'getType', 'setType']];
    }
}