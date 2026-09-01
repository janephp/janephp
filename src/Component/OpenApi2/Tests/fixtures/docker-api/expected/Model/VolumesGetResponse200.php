<?php

namespace Docker\Api\Model;

class VolumesGetResponse200
{
    /**
     * List of volumes
     *
     * @var list<Volume>
     */
    public array $volumes;
    /**
     * Warnings that occurred when fetching the list of volumes.
     * 
     *
     * @var list<string>
     */
    public array $warnings;
}