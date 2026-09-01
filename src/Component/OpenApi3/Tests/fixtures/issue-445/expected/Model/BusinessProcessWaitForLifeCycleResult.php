<?php

namespace PicturePark\API\Model;

class BusinessProcessWaitForLifeCycleResult
{
    /**
     * The life cycle that was hit.
     *
     * @var string|null
     */
    public ?string $lifeCycleHit;
    /**
     * The business process.
     *
     * @var BusinessProcess
     */
    public BusinessProcess $businessProcess;
}