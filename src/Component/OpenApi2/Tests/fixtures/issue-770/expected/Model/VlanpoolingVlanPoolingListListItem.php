<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class VlanpoolingVlanPoolingListListItem
{
    /**
     * Identifier of the service
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * VLANs of the VLAN pooling profile
     *
     * @var string
     */
    public string $pool;
    /**
     * Algorithm of the VLAN pooling profile
     *
     * @var string
     */
    public string $algo = 'MAC_HASH';
    /**
     * identifier of the domain
     *
     * @var string
     */
    public string $domainId;
    /**
     * Description of the service
     *
     * @var string
     */
    public string $description;
}