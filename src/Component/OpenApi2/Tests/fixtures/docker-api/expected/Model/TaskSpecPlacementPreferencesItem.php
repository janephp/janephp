<?php

namespace Docker\Api\Model;

class TaskSpecPlacementPreferencesItem
{
    /**
     * 
     *
     * @var TaskSpecPlacementPreferencesItemSpread
     */
    protected $spread;
    /**
     * 
     *
     * @return TaskSpecPlacementPreferencesItemSpread
     */
    public function getSpread() : TaskSpecPlacementPreferencesItemSpread
    {
        return $this->spread;
    }
    /**
     * 
     *
     * @param TaskSpecPlacementPreferencesItemSpread $spread
     *
     * @return self
     */
    public function setSpread(TaskSpecPlacementPreferencesItemSpread $spread) : self
    {
        $this->spread = $spread;
        return $this;
    }
}