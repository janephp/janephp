<?php

namespace Docker\Api\Model;

class ProcessConfig
{
    /**
     * @var bool
     */
    public bool $privileged;
    /**
     * @var string
     */
    public string $user;
    /**
     * @var bool
     */
    public bool $tty;
    /**
     * @var string
     */
    public string $entrypoint;
    /**
     * @var list<string>
     */
    public array $arguments;
}