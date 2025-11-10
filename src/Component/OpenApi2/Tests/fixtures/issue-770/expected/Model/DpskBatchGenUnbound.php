<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskBatchGenUnbound
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Amount of generate unbound DPSK
     *
     * @var int
     */
    protected $amount;
    /**
     * User Name of DPSK
     *
     * @var string
     */
    protected $userName;
    /**
     * @var list<string>
     */
    protected $passphraseList;
    /**
     * Identity User Role ID of DPSK
     *
     * @var string
     */
    protected $userRoleId;
    /**
     * VLAN ID of DPSK
     *
     * @var int
     */
    protected $vlanId;
    /**
     * Using group DPSK or not
     *
     * @var bool
     */
    protected $groupDpsk;
    /**
     * Amount of generate unbound DPSK
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
    /**
     * Amount of generate unbound DPSK
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(int $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * User Name of DPSK
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User Name of DPSK
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getPassphraseList(): array
    {
        return $this->passphraseList;
    }
    /**
     * @param list<string> $passphraseList
     *
     * @return self
     */
    public function setPassphraseList(array $passphraseList): self
    {
        $this->initialized['passphraseList'] = true;
        $this->passphraseList = $passphraseList;
        return $this;
    }
    /**
     * Identity User Role ID of DPSK
     *
     * @return string
     */
    public function getUserRoleId(): string
    {
        return $this->userRoleId;
    }
    /**
     * Identity User Role ID of DPSK
     *
     * @param string $userRoleId
     *
     * @return self
     */
    public function setUserRoleId(string $userRoleId): self
    {
        $this->initialized['userRoleId'] = true;
        $this->userRoleId = $userRoleId;
        return $this;
    }
    /**
     * VLAN ID of DPSK
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * VLAN ID of DPSK
     *
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
    /**
     * Using group DPSK or not
     *
     * @return bool
     */
    public function getGroupDpsk(): bool
    {
        return $this->groupDpsk;
    }
    /**
     * Using group DPSK or not
     *
     * @param bool $groupDpsk
     *
     * @return self
     */
    public function setGroupDpsk(bool $groupDpsk): self
    {
        $this->initialized['groupDpsk'] = true;
        $this->groupDpsk = $groupDpsk;
        return $this;
    }
}