<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class VlanpoolingModifyVlanPooling
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
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
    public string $algo;
    /**
     * identifier of the domain
     *
     * @var string
     */
    public string $domainId;
}