<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ForwardingRule implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The protocol used for traffic to the load balancer. The possible values are: `http`, `https`, `http2`, `http3`, `tcp`, or `udp`. If you set the  `entry_protocol` to `udp`, the `target_protocol` must be set to `udp`.  When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     * 
     *
     * @var string
     */
    public string $entryProtocol;
    /**
     * An integer representing the port on which the load balancer instance will listen.
     *
     * @var int
     */
    public int $entryPort;
    /**
     * The protocol used for traffic from the load balancer to the backend Droplets. The possible values are: `http`, `https`, `http2`, `tcp`, or `udp`. If you set the `target_protocol` to `udp`, the `entry_protocol` must be set to  `udp`. When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     * 
     *
     * @var string
     */
    public string $targetProtocol;
    /**
     * An integer representing the port on the backend Droplets to which the load balancer will send traffic.
     *
     * @var int
     */
    public int $targetPort;
    /**
     * The ID of the TLS certificate used for SSL termination if enabled.
     *
     * @var string
     */
    public string $certificateId;
    /**
     * A boolean value indicating whether SSL encrypted traffic will be passed through to the backend Droplets.
     *
     * @var bool
     */
    public bool $tlsPassthrough;
    public function definedProperties(): array
    {
        return ['entryProtocol' => 'entry_protocol', 'entryPort' => 'entry_port', 'targetProtocol' => 'target_protocol', 'targetPort' => 'target_port', 'certificateId' => 'certificate_id', 'tlsPassthrough' => 'tls_passthrough'];
    }
}