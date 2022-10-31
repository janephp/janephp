<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecDNSConfig
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
     * The IP addresses of the name servers.
     *
     * @var string[]
     */
    protected $nameservers;
    /**
     * A search list for host-name lookup.
     *
     * @var string[]
     */
    protected $search;
    /**
    * A list of internal resolver variables to be modified (e.g.,
    `debug`, `ndots:3`, etc.).
    
    *
    * @var string[]
    */
    protected $options;
    /**
     * The IP addresses of the name servers.
     *
     * @return string[]
     */
    public function getNameservers() : array
    {
        return $this->nameservers;
    }
    /**
     * The IP addresses of the name servers.
     *
     * @param string[] $nameservers
     *
     * @return self
     */
    public function setNameservers(array $nameservers) : self
    {
        $this->initialized['nameservers'] = true;
        $this->nameservers = $nameservers;
        return $this;
    }
    /**
     * A search list for host-name lookup.
     *
     * @return string[]
     */
    public function getSearch() : array
    {
        return $this->search;
    }
    /**
     * A search list for host-name lookup.
     *
     * @param string[] $search
     *
     * @return self
     */
    public function setSearch(array $search) : self
    {
        $this->initialized['search'] = true;
        $this->search = $search;
        return $this;
    }
    /**
    * A list of internal resolver variables to be modified (e.g.,
    `debug`, `ndots:3`, etc.).
    
    *
    * @return string[]
    */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
    * A list of internal resolver variables to be modified (e.g.,
    `debug`, `ndots:3`, etc.).
    
    *
    * @param string[] $options
    *
    * @return self
    */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}