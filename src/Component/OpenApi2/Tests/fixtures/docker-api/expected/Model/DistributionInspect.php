<?php

namespace Docker\Api\Model;

class DistributionInspect
{
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     * 
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $descriptor;
    /**
     * An array containing all platforms supported by the image.
     * 
     *
     * @var list<OCIPlatform>
     */
    public array $platforms;
}