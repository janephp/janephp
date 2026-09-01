<?php

namespace Docker\Api\Model;

class SwarmSpecEncryptionConfig
{
    /**
     * If set, generate a key and use it to lock data stored on the
     * managers.
     * 
     *
     * @var bool
     */
    public bool $autoLockManagers;
}