<?php

namespace Jane\Generated\DigitalOcean\Model;

class ForwardingRule extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The protocol used for traffic to the load balancer. The possible values are: `http`, `https`, `http2`, `http3`, `tcp`, or `udp`. If you set the  `entry_protocol` to `udp`, the `target_protocol` must be set to `udp`.  When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     * 
     *
     * @var string
     */
    protected $entryProtocol;
    /**
     * An integer representing the port on which the load balancer instance will listen.
     *
     * @var int
     */
    protected $entryPort;
    /**
     * The protocol used for traffic from the load balancer to the backend Droplets. The possible values are: `http`, `https`, `http2`, `tcp`, or `udp`. If you set the `target_protocol` to `udp`, the `entry_protocol` must be set to  `udp`. When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     * 
     *
     * @var string
     */
    protected $targetProtocol;
    /**
     * An integer representing the port on the backend Droplets to which the load balancer will send traffic.
     *
     * @var int
     */
    protected $targetPort;
    /**
     * The ID of the TLS certificate used for SSL termination if enabled.
     *
     * @var string
     */
    protected $certificateId;
    /**
     * A boolean value indicating whether SSL encrypted traffic will be passed through to the backend Droplets.
     *
     * @var bool
     */
    protected $tlsPassthrough;
    /**
     * The protocol used for traffic to the load balancer. The possible values are: `http`, `https`, `http2`, `http3`, `tcp`, or `udp`. If you set the  `entry_protocol` to `udp`, the `target_protocol` must be set to `udp`.  When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     * 
     *
     * @return string
     */
    public function getEntryProtocol(): string
    {
        return $this->entryProtocol;
    }
    /**
     * The protocol used for traffic to the load balancer. The possible values are: `http`, `https`, `http2`, `http3`, `tcp`, or `udp`. If you set the  `entry_protocol` to `udp`, the `target_protocol` must be set to `udp`.  When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     *
     * @param string $entryProtocol
     *
     * @return self
     */
    public function setEntryProtocol(string $entryProtocol): self
    {
        $this->initialized['entryProtocol'] = true;
        $this->entryProtocol = $entryProtocol;
        return $this;
    }
    /**
     * An integer representing the port on which the load balancer instance will listen.
     *
     * @return int
     */
    public function getEntryPort(): int
    {
        return $this->entryPort;
    }
    /**
     * An integer representing the port on which the load balancer instance will listen.
     *
     * @param int $entryPort
     *
     * @return self
     */
    public function setEntryPort(int $entryPort): self
    {
        $this->initialized['entryPort'] = true;
        $this->entryPort = $entryPort;
        return $this;
    }
    /**
     * The protocol used for traffic from the load balancer to the backend Droplets. The possible values are: `http`, `https`, `http2`, `tcp`, or `udp`. If you set the `target_protocol` to `udp`, the `entry_protocol` must be set to  `udp`. When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     * 
     *
     * @return string
     */
    public function getTargetProtocol(): string
    {
        return $this->targetProtocol;
    }
    /**
     * The protocol used for traffic from the load balancer to the backend Droplets. The possible values are: `http`, `https`, `http2`, `tcp`, or `udp`. If you set the `target_protocol` to `udp`, the `entry_protocol` must be set to  `udp`. When using UDP, the load balancer requires that you set up a health  check with a port that uses TCP, HTTP, or HTTPS to work properly.
     *
     * @param string $targetProtocol
     *
     * @return self
     */
    public function setTargetProtocol(string $targetProtocol): self
    {
        $this->initialized['targetProtocol'] = true;
        $this->targetProtocol = $targetProtocol;
        return $this;
    }
    /**
     * An integer representing the port on the backend Droplets to which the load balancer will send traffic.
     *
     * @return int
     */
    public function getTargetPort(): int
    {
        return $this->targetPort;
    }
    /**
     * An integer representing the port on the backend Droplets to which the load balancer will send traffic.
     *
     * @param int $targetPort
     *
     * @return self
     */
    public function setTargetPort(int $targetPort): self
    {
        $this->initialized['targetPort'] = true;
        $this->targetPort = $targetPort;
        return $this;
    }
    /**
     * The ID of the TLS certificate used for SSL termination if enabled.
     *
     * @return string
     */
    public function getCertificateId(): string
    {
        return $this->certificateId;
    }
    /**
     * The ID of the TLS certificate used for SSL termination if enabled.
     *
     * @param string $certificateId
     *
     * @return self
     */
    public function setCertificateId(string $certificateId): self
    {
        $this->initialized['certificateId'] = true;
        $this->certificateId = $certificateId;
        return $this;
    }
    /**
     * A boolean value indicating whether SSL encrypted traffic will be passed through to the backend Droplets.
     *
     * @return bool
     */
    public function getTlsPassthrough(): bool
    {
        return $this->tlsPassthrough;
    }
    /**
     * A boolean value indicating whether SSL encrypted traffic will be passed through to the backend Droplets.
     *
     * @param bool $tlsPassthrough
     *
     * @return self
     */
    public function setTlsPassthrough(bool $tlsPassthrough): self
    {
        $this->initialized['tlsPassthrough'] = true;
        $this->tlsPassthrough = $tlsPassthrough;
        return $this;
    }
}