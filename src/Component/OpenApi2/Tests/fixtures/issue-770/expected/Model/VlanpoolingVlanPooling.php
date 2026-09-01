<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class VlanpoolingVlanPooling
{
    /**
     * Identifier of the VLAN pooling profile
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the domain which the VLAN pooling profile belongs to
     *
     * @var string
     */
    public string $domainId;
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
}