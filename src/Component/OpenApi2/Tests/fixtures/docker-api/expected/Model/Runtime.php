<?php

namespace Docker\Api\Model;

class Runtime
{
    /**
     * Name and, optional, path, of the OCI executable binary.
     * 
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     * 
     *
     * @var string
     */
    public string $path;
    /**
     * List of command-line arguments to pass to the runtime when invoked.
     * 
     *
     * @var list<string>|null
     */
    public ?array $runtimeArgs;
}