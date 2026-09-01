<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentWritable implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the partner attachment. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    public string $name;
    /**
     * Bandwidth (in Mbps) of the connection.
     *
     * @var int
     */
    public int $connectionBandwidthInMbps;
    /**
     * The region to create the partner attachment.
     *
     * @var string
     */
    public string $region;
    /**
     * @var string
     */
    public string $naasProvider;
    /**
     * An array of VPCs IDs.
     *
     * @var list<string>
     */
    public array $vpcIds;
    /**
     * Optional associated partner attachment UUID
     *
     * @var string
     */
    public string $parentUuid;
    /**
     * Optional BGP configurations
     *
     * @var PartnerAttachmentWritableBgp
     */
    public PartnerAttachmentWritableBgp $bgp;
    /**
     * Optional redundancy zone for the partner attachment.
     *
     * @var string
     */
    public string $redundancyZone;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'connectionBandwidthInMbps' => 'connection_bandwidth_in_mbps', 'region' => 'region', 'naasProvider' => 'naas_provider', 'vpcIds' => 'vpc_ids', 'parentUuid' => 'parent_uuid', 'bgp' => 'bgp', 'redundancyZone' => 'redundancy_zone'];
    }
}