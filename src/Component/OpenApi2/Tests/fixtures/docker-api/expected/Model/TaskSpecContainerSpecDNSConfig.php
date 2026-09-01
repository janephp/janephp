<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecDNSConfig
{
    /**
     * The IP addresses of the name servers.
     *
     * @var list<string>
     */
    public array $nameservers;
    /**
     * A search list for host-name lookup.
     *
     * @var list<string>
     */
    public array $search;
    /**
     * A list of internal resolver variables to be modified (e.g.,
     * `debug`, `ndots:3`, etc.).
     * 
     *
     * @var list<string>
     */
    public array $options;
}