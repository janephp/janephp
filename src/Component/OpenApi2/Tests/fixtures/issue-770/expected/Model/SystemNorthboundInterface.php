<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemNorthboundInterface
{
    /**
     * @var string
     */
    public string $userName;
    /**
     * @var string
     */
    public string $password;
    /**
     * AuthType of the Radius used in Northbound Interface, the value should be "PAP" or "CHAP".
     *
     * @var string
     */
    public string $radiusAuthType;
}