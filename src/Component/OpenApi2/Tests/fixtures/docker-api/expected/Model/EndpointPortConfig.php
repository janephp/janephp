<?php

namespace Docker\Api\Model;

class EndpointPortConfig
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $protocol;
    /**
     * The port inside the container.
     *
     * @var int
     */
    public int $targetPort;
    /**
     * The port on the swarm hosts.
     *
     * @var int
     */
    public int $publishedPort;
    /**
     * The mode in which port is published.
     * 
     * <p><br /></p>
     * 
     * - "ingress" makes the target port accessible on every node,
     *   regardless of whether there is a task for the service running on
     *   that node or not.
     * - "host" bypasses the routing mesh and publish the port directly on
     *   the swarm node where that service is running.
     * 
     *
     * @var string
     */
    public string $publishMode = 'ingress';
}