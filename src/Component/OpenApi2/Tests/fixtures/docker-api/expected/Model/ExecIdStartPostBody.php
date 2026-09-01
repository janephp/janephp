<?php

namespace Docker\Api\Model;

class ExecIdStartPostBody
{
    /**
     * Detach from the command.
     *
     * @var bool
     */
    public bool $detach;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    public bool $tty;
}