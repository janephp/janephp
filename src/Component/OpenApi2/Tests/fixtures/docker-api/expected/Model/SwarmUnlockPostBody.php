<?php

namespace Docker\Api\Model;

class SwarmUnlockPostBody
{
    /**
     * The swarm's unlock key.
     *
     * @var string
     */
    public string $unlockKey;
}