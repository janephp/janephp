<?php

namespace Docker\Api\Model;

class TaskSpecPlacementPreferencesItemSpread
{
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @var string
     */
    protected $spreadDescriptor;
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @return string
     */
    public function getSpreadDescriptor() : string
    {
        return $this->spreadDescriptor;
    }
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @param string $spreadDescriptor
     *
     * @return self
     */
    public function setSpreadDescriptor(string $spreadDescriptor) : self
    {
        $this->spreadDescriptor = $spreadDescriptor;
        return $this;
    }
}