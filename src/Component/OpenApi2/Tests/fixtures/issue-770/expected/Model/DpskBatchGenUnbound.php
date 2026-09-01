<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskBatchGenUnbound
{
    /**
     * Amount of generate unbound DPSK
     *
     * @var int
     */
    public int $amount;
    /**
     * User Name of DPSK
     *
     * @var string
     */
    public string $userName;
    /**
     * @var list<string>
     */
    public array $passphraseList;
    /**
     * Identity User Role ID of DPSK
     *
     * @var string
     */
    public string $userRoleId;
    /**
     * VLAN ID of DPSK
     *
     * @var int
     */
    public int $vlanId;
    /**
     * Using group DPSK or not
     *
     * @var bool
     */
    public bool $groupDpsk;
}