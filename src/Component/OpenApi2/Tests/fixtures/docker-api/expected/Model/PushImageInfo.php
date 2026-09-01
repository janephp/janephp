<?php

namespace Docker\Api\Model;

class PushImageInfo
{
    /**
     * @var string
     */
    public string $error;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $progress;
    /**
     * @var ProgressDetail
     */
    public ProgressDetail $progressDetail;
}