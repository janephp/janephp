<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference the partner attachment.
     *
     * @var string
     */
    public string $id;
    /**
     * The name of the partner attachment. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    public string $name;
    /**
     * The current operational state of the attachment.
     *
     * @var string
     */
    public string $state;
    /**
     * The bandwidth (in Mbps) of the connection.
     *
     * @var int
     */
    public int $connectionBandwidthInMbps;
    /**
     * The region where the partner attachment is located.
     *
     * @var string
     */
    public string $region;
    /**
     * The Network as a Service (NaaS) provider for the partner attachment.
     *
     * @var string
     */
    public string $naasProvider;
    /**
     * An array of VPC network IDs.
     *
     * @var list<string>
     */
    public array $vpcIds;
    /**
     * The BGP configuration for the partner attachment.
     *
     * @var PartnerAttachmentBgp
     */
    public PartnerAttachmentBgp $bgp;
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Associated partner attachment UUID
     *
     * @var string
     */
    public string $parentUuid;
    /**
     * An array of associated partner attachment UUIDs.
     *
     * @var list<string>
     */
    public array $children;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'state' => 'state', 'connectionBandwidthInMbps' => 'connection_bandwidth_in_mbps', 'region' => 'region', 'naasProvider' => 'naas_provider', 'vpcIds' => 'vpc_ids', 'bgp' => 'bgp', 'createdAt' => 'created_at', 'parentUuid' => 'parent_uuid', 'children' => 'children'];
    }
}