<?php

namespace Docker\Api\Model;

class ServicesCreatePostResponse201
{
    /**
     * The ID of the created service.
     *
     * @var string
     */
    public string $iD;
    /**
     * Optional warning message
     *
     * @var string
     */
    public string $warning;
}