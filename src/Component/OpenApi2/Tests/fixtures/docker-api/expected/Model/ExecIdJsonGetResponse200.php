<?php

namespace Docker\Api\Model;

class ExecIdJsonGetResponse200
{
    /**
     * @var bool
     */
    public bool $canRemove;
    /**
     * @var string
     */
    public string $detachKeys;
    /**
     * @var string
     */
    public string $iD;
    /**
     * @var bool
     */
    public bool $running;
    /**
     * @var int
     */
    public int $exitCode;
    /**
     * @var ProcessConfig
     */
    public ProcessConfig $processConfig;
    /**
     * @var bool
     */
    public bool $openStdin;
    /**
     * @var bool
     */
    public bool $openStderr;
    /**
     * @var bool
     */
    public bool $openStdout;
    /**
     * @var string
     */
    public string $containerID;
    /**
     * The system process ID for the exec process.
     *
     * @var int
     */
    public int $pid;
}