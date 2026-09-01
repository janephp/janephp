<?php

namespace PicturePark\API\Model;

class BusinessProcessWaitForStateResult
{
    /**
     * The state that was hit.
     *
     * @var string|null
     */
    public ?string $stateHit;
    /**
     * The business process.
     *
     * @var BusinessProcess
     */
    public BusinessProcess $businessProcess;
}