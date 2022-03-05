<?php

namespace Docker\Api\Model;

class ExecIdStartPostBody
{
    /**
     * Detach from the command.
     *
     * @var bool
     */
    protected $detach;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    protected $tty;
    /**
     * Detach from the command.
     *
     * @return bool
     */
    public function getDetach() : bool
    {
        return $this->detach;
    }
    /**
     * Detach from the command.
     *
     * @param bool $detach
     *
     * @return self
     */
    public function setDetach(bool $detach) : self
    {
        $this->detach = $detach;
        return $this;
    }
    /**
     * Allocate a pseudo-TTY.
     *
     * @return bool
     */
    public function getTty() : bool
    {
        return $this->tty;
    }
    /**
     * Allocate a pseudo-TTY.
     *
     * @param bool $tty
     *
     * @return self
     */
    public function setTty(bool $tty) : self
    {
        $this->tty = $tty;
        return $this;
    }
}