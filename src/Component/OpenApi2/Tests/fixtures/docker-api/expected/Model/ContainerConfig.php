<?php

namespace Docker\Api\Model;

class ContainerConfig
{
    /**
     * The hostname to use for the container, as a valid RFC 1123 hostname.
     *
     * @var string
     */
    public string $hostname;
    /**
     * The domain name to use for the container.
     *
     * @var string
     */
    public string $domainname;
    /**
     * The user that commands are run as inside the container.
     *
     * @var string
     */
    public string $user;
    /**
     * Whether to attach to `stdin`.
     *
     * @var bool
     */
    public bool $attachStdin = false;
    /**
     * Whether to attach to `stdout`.
     *
     * @var bool
     */
    public bool $attachStdout = true;
    /**
     * Whether to attach to `stderr`.
     *
     * @var bool
     */
    public bool $attachStderr = true;
    /**
     * An object mapping ports to an empty object in the form:
     * 
     * `{"<port>/<tcp|udp|sctp>": {}}`
     * 
     *
     * @var array<string, mixed>
     */
    public iterable $exposedPorts;
    /**
     * Attach standard streams to a TTY, including `stdin` if it is not closed.
     * 
     *
     * @var bool
     */
    public bool $tty = false;
    /**
     * Open `stdin`
     *
     * @var bool
     */
    public bool $openStdin = false;
    /**
     * Close `stdin` after one attached client disconnects
     *
     * @var bool
     */
    public bool $stdinOnce = false;
    /**
     * A list of environment variables to set inside the container in the
     * form `["VAR=value", ...]`. A variable without `=` is removed from the
     * environment, rather than to have an empty value.
     * 
     *
     * @var list<string>
     */
    public array $env;
    /**
     * Command to run specified as a string or an array of strings.
     * 
     *
     * @var list<string>
     */
    public array $cmd;
    /**
     * A test to perform to check that the container is healthy.
     *
     * @var HealthConfig
     */
    public HealthConfig $healthcheck;
    /**
     * Command is already escaped (Windows only)
     *
     * @var bool
     */
    public bool $argsEscaped;
    /**
     * The name of the image to use when creating the container/
     * 
     *
     * @var string
     */
    public string $image;
    /**
     * An object mapping mount point paths inside the container to empty
     * objects.
     * 
     *
     * @var array<string, mixed>
     */
    public iterable $volumes;
    /**
     * The working directory for commands to run in.
     *
     * @var string
     */
    public string $workingDir;
    /**
     * The entry point for the container as a string or an array of strings.
     * 
     * If the array consists of exactly one empty string (`[""]`) then the
     * entry point is reset to system default (i.e., the entry point used by
     * docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
     * 
     *
     * @var list<string>
     */
    public array $entrypoint;
    /**
     * Disable networking for the container.
     *
     * @var bool
     */
    public bool $networkDisabled;
    /**
     * MAC address of the container.
     *
     * @var string
     */
    public string $macAddress;
    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     * 
     *
     * @var list<string>
     */
    public array $onBuild;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * Signal to stop a container as a string or unsigned integer.
     * 
     *
     * @var string
     */
    public string $stopSignal = 'SIGTERM';
    /**
     * Timeout to stop a container in seconds.
     *
     * @var int
     */
    public int $stopTimeout = 10;
    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     * 
     *
     * @var list<string>
     */
    public array $shell;
}