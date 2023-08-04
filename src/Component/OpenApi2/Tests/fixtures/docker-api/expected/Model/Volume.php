<?php

namespace Docker\Api\Model;

class Volume
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
     * Name of the volume.
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the volume driver used by the volume.
     *
     * @var string
     */
    protected $driver;
    /**
     * Mount path of the volume on the host.
     *
     * @var string
     */
    protected $mountpoint;
    /**
     * Date/Time the volume was created.
     *
     * @var string
     */
    protected $createdAt;
    /**
    * Low-level details about the volume, provided by the volume driver.
    Details are returned as a map with key/value pairs:
    `{"key":"value","key2":"value2"}`.
    
    The `Status` field is optional, and is omitted if the volume driver
    does not support this feature.
    
    *
    * @var array<string, mixed>
    */
    protected $status;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
    * The level at which the volume exists. Either `global` for cluster-wide,
    or `local` for machine level.
    
    *
    * @var string
    */
    protected $scope = 'local';
    /**
     * The driver specific options used when creating the volume.
     *
     * @var array<string, string>
     */
    protected $options;
    /**
    * Usage details about the volume. This information is used by the
    `GET /system/df` endpoint, and omitted in other endpoints.
    
    *
    * @var VolumeUsageData|null
    */
    protected $usageData;
    /**
     * Name of the volume.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the volume.
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
     * Name of the volume driver used by the volume.
     *
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }
    /**
     * Name of the volume driver used by the volume.
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
     * Mount path of the volume on the host.
     *
     * @return string
     */
    public function getMountpoint() : string
    {
        return $this->mountpoint;
    }
    /**
     * Mount path of the volume on the host.
     *
     * @param string $mountpoint
     *
     * @return self
     */
    public function setMountpoint(string $mountpoint) : self
    {
        $this->initialized['mountpoint'] = true;
        $this->mountpoint = $mountpoint;
        return $this;
    }
    /**
     * Date/Time the volume was created.
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * Date/Time the volume was created.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
    * Low-level details about the volume, provided by the volume driver.
    Details are returned as a map with key/value pairs:
    `{"key":"value","key2":"value2"}`.
    
    The `Status` field is optional, and is omitted if the volume driver
    does not support this feature.
    
    *
    * @return array<string, mixed>
    */
    public function getStatus() : iterable
    {
        return $this->status;
    }
    /**
    * Low-level details about the volume, provided by the volume driver.
    Details are returned as a map with key/value pairs:
    `{"key":"value","key2":"value2"}`.
    
    The `Status` field is optional, and is omitted if the volume driver
    does not support this feature.
    
    *
    * @param array<string, mixed> $status
    *
    * @return self
    */
    public function setStatus(iterable $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
    /**
    * The level at which the volume exists. Either `global` for cluster-wide,
    or `local` for machine level.
    
    *
    * @return string
    */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
    * The level at which the volume exists. Either `global` for cluster-wide,
    or `local` for machine level.
    
    *
    * @param string $scope
    *
    * @return self
    */
    public function setScope(string $scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * The driver specific options used when creating the volume.
     *
     * @return array<string, string>
     */
    public function getOptions() : iterable
    {
        return $this->options;
    }
    /**
     * The driver specific options used when creating the volume.
     *
     * @param array<string, string> $options
     *
     * @return self
     */
    public function setOptions(iterable $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
    * Usage details about the volume. This information is used by the
    `GET /system/df` endpoint, and omitted in other endpoints.
    
    *
    * @return VolumeUsageData|null
    */
    public function getUsageData() : ?VolumeUsageData
    {
        return $this->usageData;
    }
    /**
    * Usage details about the volume. This information is used by the
    `GET /system/df` endpoint, and omitted in other endpoints.
    
    *
    * @param VolumeUsageData|null $usageData
    *
    * @return self
    */
    public function setUsageData(?VolumeUsageData $usageData) : self
    {
        $this->initialized['usageData'] = true;
        $this->usageData = $usageData;
        return $this;
    }
}