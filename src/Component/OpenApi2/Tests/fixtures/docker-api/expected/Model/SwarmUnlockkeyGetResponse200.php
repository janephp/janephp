<?php

namespace Docker\Api\Model;

class SwarmUnlockkeyGetResponse200
{
    /**
     * The swarm's unlock key.
     *
     * @var string
     */
    protected $unlockKey;
    /**
     * The swarm's unlock key.
     *
     * @return string
     */
    public function getUnlockKey() : string
    {
        return $this->unlockKey;
    }
    /**
     * The swarm's unlock key.
     *
     * @param string $unlockKey
     *
     * @return self
     */
    public function setUnlockKey(string $unlockKey) : self
    {
        $this->unlockKey = $unlockKey;
        return $this;
    }
}