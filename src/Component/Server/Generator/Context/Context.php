<?php

namespace Jane\Component\Server\Generator\Context;

use Jane\Component\Server\Registry\Endpoint;
use Jane\Component\Server\Registry\Registry;
use Jane\Component\Server\Registry\Server;

/**
 * Context when generating a library base on a Server.
 */
class Context
{
    private UniqueVariableScope $variableScope;
    private Server $currentServer;
    private Endpoint $currentEndpoint;

    public function __construct(
        private readonly Registry $registry,
    ) {
        $this->variableScope = new UniqueVariableScope();
    }

    public function getRegistry(): Registry
    {
        return $this->registry;
    }

    public function getCurrentServer(): Server
    {
        return $this->currentServer;
    }

    public function setCurrentServer(Server $currentServer): void
    {
        $this->currentServer = $currentServer;
    }

    public function getCurrentEndpoint(): Endpoint
    {
        return $this->currentEndpoint;
    }

    public function setCurrentEndpoint(Endpoint $currentEndpoint): void
    {
        $this->currentEndpoint = $currentEndpoint;
    }

    /**
     * Refresh the unique variable scope for a context.
     */
    public function refreshScope(): void
    {
        $this->variableScope = new UniqueVariableScope();
    }

    public function getUniqueVariableName(string $prefix = 'var'): string
    {
        return $this->variableScope->getUniqueName($prefix);
    }
}
