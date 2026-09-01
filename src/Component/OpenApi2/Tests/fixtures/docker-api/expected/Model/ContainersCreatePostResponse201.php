<?php

namespace Docker\Api\Model;

class ContainersCreatePostResponse201
{
    /**
     * The ID of the created container
     *
     * @var string
     */
    public string $id;
    /**
     * Warnings encountered when creating the container
     *
     * @var list<string>
     */
    public array $warnings;
}