<?php

namespace Docker\Api\Model;

class VolumeUsageData
{
    /**
     * Amount of disk space used by the volume (in bytes). This information
     * is only available for volumes created with the `"local"` volume
     * driver. For volumes created with other volume drivers, this field
     * is set to `-1` ("not available")
     * 
     *
     * @var int
     */
    public int $size = -1;
    /**
     * The number of containers referencing this volume. This field
     * is set to `-1` if the reference-count is not available.
     * 
     *
     * @var int
     */
    public int $refCount = -1;
}