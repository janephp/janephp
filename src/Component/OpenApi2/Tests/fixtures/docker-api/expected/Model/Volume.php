<?php

namespace Docker\Api\Model;

class Volume
{
    /**
     * Name of the volume.
     *
     * @var string
     */
    public string $name;
    /**
     * Name of the volume driver used by the volume.
     *
     * @var string
     */
    public string $driver;
    /**
     * Mount path of the volume on the host.
     *
     * @var string
     */
    public string $mountpoint;
    /**
     * Date/Time the volume was created.
     *
     * @var string
     */
    public string $createdAt;
    /**
     * Low-level details about the volume, provided by the volume driver.
     * Details are returned as a map with key/value pairs:
     * `{"key":"value","key2":"value2"}`.
     * 
     * The `Status` field is optional, and is omitted if the volume driver
     * does not support this feature.
     * 
     *
     * @var array<string, mixed>
     */
    public iterable $status;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * The level at which the volume exists. Either `global` for cluster-wide,
     * or `local` for machine level.
     * 
     *
     * @var string
     */
    public string $scope = 'local';
    /**
     * The driver specific options used when creating the volume.
     * 
     *
     * @var array<string, string>
     */
    public iterable $options;
    /**
     * Usage details about the volume. This information is used by the
     * `GET /system/df` endpoint, and omitted in other endpoints.
     * 
     *
     * @var VolumeUsageData|null
     */
    public ?VolumeUsageData $usageData;
}