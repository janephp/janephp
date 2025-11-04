<?php

namespace Jane\Component\Server\Registry;

class Registry
{
    /** @var array<string> */
    public array $outputDirectories = [];

    /** @var Server[] */
    public array $servers = [];

    public function addServer(Server $server): void
    {
        $this->servers[] = $server;
    }

    /**
     * @return Server[]
     */
    public function getServers(): array
    {
        return $this->servers;
    }

    /**
     * @return iterable<array{0: Server, 1: Endpoint}>
     */
    public function getEndpointsPerServers(): iterable
    {
        foreach ($this->servers as $server) {
            foreach ($server->endpoints as $endpoint) {
                yield [$server, $endpoint];
            }
        }
    }

    public function getOptionsHash(): string
    {
        return md5(json_encode([
            'output-directories' => $this->outputDirectories,
        ]));
    }
}
