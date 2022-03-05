<?php

namespace Docker\Api\Model;

class NetworksCreatePostBody
{
    /**
     * The network's name.
     *
     * @var string
     */
    protected $name;
    /**
    * Check for networks with duplicate names. Since Network is
    primarily keyed based on a random ID and not on the name, and
    network name is strictly a user-friendly alias to the network
    which is uniquely identified using ID, there is no guaranteed
    way to check for duplicates. CheckDuplicate is there to provide
    a best effort checking of any networks which has the same name
    but it is not guaranteed to catch all name collisions.
    
    *
    * @var bool
    */
    protected $checkDuplicate;
    /**
     * Name of the network driver plugin to use.
     *
     * @var string
     */
    protected $driver = 'bridge';
    /**
     * Restrict external access to the network.
     *
     * @var bool
     */
    protected $internal;
    /**
    * Globally scoped network is manually attachable by regular
    containers from workers in swarm mode.
    
    *
    * @var bool
    */
    protected $attachable;
    /**
    * Ingress network is the network which provides the routing-mesh
    in swarm mode.
    
    *
    * @var bool
    */
    protected $ingress;
    /**
     * 
     *
     * @var IPAM
     */
    protected $iPAM;
    /**
     * Enable IPv6 on the network.
     *
     * @var bool
     */
    protected $enableIPv6;
    /**
     * Network specific options to be used by the drivers.
     *
     * @var string[]
     */
    protected $options;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * The network's name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The network's name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
    * Check for networks with duplicate names. Since Network is
    primarily keyed based on a random ID and not on the name, and
    network name is strictly a user-friendly alias to the network
    which is uniquely identified using ID, there is no guaranteed
    way to check for duplicates. CheckDuplicate is there to provide
    a best effort checking of any networks which has the same name
    but it is not guaranteed to catch all name collisions.
    
    *
    * @return bool
    */
    public function getCheckDuplicate() : bool
    {
        return $this->checkDuplicate;
    }
    /**
    * Check for networks with duplicate names. Since Network is
    primarily keyed based on a random ID and not on the name, and
    network name is strictly a user-friendly alias to the network
    which is uniquely identified using ID, there is no guaranteed
    way to check for duplicates. CheckDuplicate is there to provide
    a best effort checking of any networks which has the same name
    but it is not guaranteed to catch all name collisions.
    
    *
    * @param bool $checkDuplicate
    *
    * @return self
    */
    public function setCheckDuplicate(bool $checkDuplicate) : self
    {
        $this->checkDuplicate = $checkDuplicate;
        return $this;
    }
    /**
     * Name of the network driver plugin to use.
     *
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }
    /**
     * Name of the network driver plugin to use.
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver) : self
    {
        $this->driver = $driver;
        return $this;
    }
    /**
     * Restrict external access to the network.
     *
     * @return bool
     */
    public function getInternal() : bool
    {
        return $this->internal;
    }
    /**
     * Restrict external access to the network.
     *
     * @param bool $internal
     *
     * @return self
     */
    public function setInternal(bool $internal) : self
    {
        $this->internal = $internal;
        return $this;
    }
    /**
    * Globally scoped network is manually attachable by regular
    containers from workers in swarm mode.
    
    *
    * @return bool
    */
    public function getAttachable() : bool
    {
        return $this->attachable;
    }
    /**
    * Globally scoped network is manually attachable by regular
    containers from workers in swarm mode.
    
    *
    * @param bool $attachable
    *
    * @return self
    */
    public function setAttachable(bool $attachable) : self
    {
        $this->attachable = $attachable;
        return $this;
    }
    /**
    * Ingress network is the network which provides the routing-mesh
    in swarm mode.
    
    *
    * @return bool
    */
    public function getIngress() : bool
    {
        return $this->ingress;
    }
    /**
    * Ingress network is the network which provides the routing-mesh
    in swarm mode.
    
    *
    * @param bool $ingress
    *
    * @return self
    */
    public function setIngress(bool $ingress) : self
    {
        $this->ingress = $ingress;
        return $this;
    }
    /**
     * 
     *
     * @return IPAM
     */
    public function getIPAM() : IPAM
    {
        return $this->iPAM;
    }
    /**
     * 
     *
     * @param IPAM $iPAM
     *
     * @return self
     */
    public function setIPAM(IPAM $iPAM) : self
    {
        $this->iPAM = $iPAM;
        return $this;
    }
    /**
     * Enable IPv6 on the network.
     *
     * @return bool
     */
    public function getEnableIPv6() : bool
    {
        return $this->enableIPv6;
    }
    /**
     * Enable IPv6 on the network.
     *
     * @param bool $enableIPv6
     *
     * @return self
     */
    public function setEnableIPv6(bool $enableIPv6) : self
    {
        $this->enableIPv6 = $enableIPv6;
        return $this;
    }
    /**
     * Network specific options to be used by the drivers.
     *
     * @return string[]
     */
    public function getOptions() : iterable
    {
        return $this->options;
    }
    /**
     * Network specific options to be used by the drivers.
     *
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(iterable $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
}