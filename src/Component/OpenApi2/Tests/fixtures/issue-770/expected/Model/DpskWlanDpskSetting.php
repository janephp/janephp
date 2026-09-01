<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanDpskSetting
{
    /**
     * DPSK enabled
     *
     * @var bool
     */
    public bool $dpskEnabled = false;
    /**
     * Length of DPSK key
     *
     * @var int
     */
    public int $length = 62;
    /**
     * Type of DPSK key
     *
     * @var string
     */
    public string $dpskType = 'Secure';
    /**
     * Expiration of DPSK key
     *
     * @var string
     */
    public string $expiration = 'Unlimited';
    /**
     * Type of expiration start from
     *
     * @var string
     */
    public string $dpskFromType = 'CreateTime';
}