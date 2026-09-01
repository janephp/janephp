<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SplitTunnelCreateSplitTunnelProfile
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
     * Exception Address List(Destination rule) of split tunnel profile
     *
     * @var list<SplitTunnelSplitTunnelIpMaskRule>
     */
    public array $rules;
    /**
     * Forwarding Mode of split tunnel profile
     *
     * @var string
     */
    public string $defaultAction = 'LBO';
}