<?php

namespace Docker\Api\Model;

class IPAM
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name of the IPAM driver to use.
     *
     * @var string
     */
    protected $driver = 'default';
    /**
    * List of IPAM configuration options, specified as a map:
    
    ```
    {"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}
    ```
    
    *
    * @var string[][]
    */
    protected $config;
    /**
     * Driver-specific options, specified as a map.
     *
     * @var string[]
     */
    protected $options;
    /**
     * Name of the IPAM driver to use.
     *
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }
    /**
     * Name of the IPAM driver to use.
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver) : self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
    * List of IPAM configuration options, specified as a map:
    
    ```
    {"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}
    ```
    
    *
    * @return string[][]
    */
    public function getConfig() : array
    {
        return $this->config;
    }
    /**
    * List of IPAM configuration options, specified as a map:
    
    ```
    {"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}
    ```
    
    *
    * @param string[][] $config
    *
    * @return self
    */
    public function setConfig(array $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * Driver-specific options, specified as a map.
     *
     * @return string[]
     */
    public function getOptions() : iterable
    {
        return $this->options;
    }
    /**
     * Driver-specific options, specified as a map.
     *
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(iterable $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}