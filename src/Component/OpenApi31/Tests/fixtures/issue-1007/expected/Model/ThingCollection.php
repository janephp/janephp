<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class ThingCollection implements AdditionalPropertiesInterface
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
     * @var AbsentAdditionalPropertiesSchema
     */
    protected $absent;
    /**
     * @var ExplicitOpenSchema
     */
    protected $explicitOpen;
    /**
     * @var ClosedSchema
     */
    protected $closed;
    /**
     * @var TypedMapSchema
     */
    protected $typedMap;
    /**
     * @var PatternOnlySchema
     */
    protected $patternOnly;
    /**
     * @return AbsentAdditionalPropertiesSchema
     */
    public function getAbsent(): AbsentAdditionalPropertiesSchema
    {
        return $this->absent;
    }
    /**
     * @param AbsentAdditionalPropertiesSchema $absent
     *
     * @return self
     */
    public function setAbsent(AbsentAdditionalPropertiesSchema $absent): self
    {
        $this->initialized['absent'] = true;
        $this->absent = $absent;
        return $this;
    }
    /**
     * @return ExplicitOpenSchema
     */
    public function getExplicitOpen(): ExplicitOpenSchema
    {
        return $this->explicitOpen;
    }
    /**
     * @param ExplicitOpenSchema $explicitOpen
     *
     * @return self
     */
    public function setExplicitOpen(ExplicitOpenSchema $explicitOpen): self
    {
        $this->initialized['explicitOpen'] = true;
        $this->explicitOpen = $explicitOpen;
        return $this;
    }
    /**
     * @return ClosedSchema
     */
    public function getClosed(): ClosedSchema
    {
        return $this->closed;
    }
    /**
     * @param ClosedSchema $closed
     *
     * @return self
     */
    public function setClosed(ClosedSchema $closed): self
    {
        $this->initialized['closed'] = true;
        $this->closed = $closed;
        return $this;
    }
    /**
     * @return TypedMapSchema
     */
    public function getTypedMap(): TypedMapSchema
    {
        return $this->typedMap;
    }
    /**
     * @param TypedMapSchema $typedMap
     *
     * @return self
     */
    public function setTypedMap(TypedMapSchema $typedMap): self
    {
        $this->initialized['typedMap'] = true;
        $this->typedMap = $typedMap;
        return $this;
    }
    /**
     * @return PatternOnlySchema
     */
    public function getPatternOnly(): PatternOnlySchema
    {
        return $this->patternOnly;
    }
    /**
     * @param PatternOnlySchema $patternOnly
     *
     * @return self
     */
    public function setPatternOnly(PatternOnlySchema $patternOnly): self
    {
        $this->initialized['patternOnly'] = true;
        $this->patternOnly = $patternOnly;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['absent' => ['absent', 'getAbsent', 'setAbsent'], 'explicitOpen' => ['explicitOpen', 'getExplicitOpen', 'setExplicitOpen'], 'closed' => ['closed', 'getClosed', 'setClosed'], 'typedMap' => ['typedMap', 'getTypedMap', 'setTypedMap'], 'patternOnly' => ['patternOnly', 'getPatternOnly', 'setPatternOnly']];
    }
}