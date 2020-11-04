<?php

namespace Docker\Api\Model;

class VolumesCreatePostBody
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
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the volume driver to use.
     *
     * @var string
     */
    protected $driver = 'local';
    /**
    * A mapping of driver options and values. These options are
    passed directly to the driver and are driver specific.
    
    *
    * @var array<string, string>
    */
    protected $driverOpts;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Name of the volume driver to use.
     *
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }
    /**
     * Name of the volume driver to use.
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
    * A mapping of driver options and values. These options are
    passed directly to the driver and are driver specific.
    
    *
    * @return array<string, string>
    */
    public function getDriverOpts() : iterable
    {
        return $this->driverOpts;
    }
    /**
    * A mapping of driver options and values. These options are
    passed directly to the driver and are driver specific.
    
    *
    * @param array<string, string> $driverOpts
    *
    * @return self
    */
    public function setDriverOpts(iterable $driverOpts) : self
    {
        $this->initialized['driverOpts'] = true;
        $this->driverOpts = $driverOpts;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
}