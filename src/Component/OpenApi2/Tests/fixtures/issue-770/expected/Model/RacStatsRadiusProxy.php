<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RacStatsRadiusProxy
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
     * AAA IP
     *
     * @var string
     */
    protected $aaASerIp;
    /**
     * NAS Type. 1: Ruckus AP 2: 3rd Party AP
     *
     * @var int
     */
    protected $nasType;
    /**
     * Number of authentications (Successful)
     *
     * @var int
     */
    protected $numSuccAuth;
    /**
     * Number of authentications (Failed)
     *
     * @var int
     */
    protected $numFailAuth;
    /**
     * Number of authentications (Incomplete)
     *
     * @var int
     */
    protected $numInCompAuth;
    /**
     * Number of accounting sessions established (Successful)
     *
     * @var int
     */
    protected $numSuccAcct;
    /**
     * Number of accounting sessions established (Failed)
     *
     * @var int
     */
    protected $numFailAcct;
    /**
     * Number of RADIUS access requests sent to AAA server
     *
     * @var int
     */
    protected $numOfAccReqAaa;
    /**
     * Number of RADIUS access accepts received from AAA server
     *
     * @var int
     */
    protected $numOfAccAcceptAaa;
    /**
     * Number of RADIUS access rejects received from AAA server
     *
     * @var int
     */
    protected $numOfAccRejAaa;
    /**
     * Number of RADIUS access challenges received from AAA server
     *
     * @var int
     */
    protected $numOfAccChallAaa;
    /**
     * Number of RADIUS accounting requests sent to AAA server
     *
     * @var int
     */
    protected $numOfAcctReqAaa;
    /**
     * Number of RADIUS accounting responses received from AAA server
     *
     * @var int
     */
    protected $numOfAcctRspAaa;
    /**
     * Number of RADIUS CoA requests received from AAA server
     *
     * @var int
     */
    protected $numOfCoAReqAaa;
    /**
     * Number of RADIUS CoA responses sent to AAA server (Successful)
     *
     * @var int
     */
    protected $numOfCoAResAaa;
    /**
     * Number of RADIUS CoA responses sent to AAA server (Failed)
     *
     * @var int
     */
    protected $numOfCoAFailAaa;
    /**
     * Number of RADIUS access requests received from NAS
     *
     * @var int
     */
    protected $numAcsRqRcvdNas;
    /**
     * Number of RADIUS access challenges sent to NAS
     *
     * @var int
     */
    protected $numAcsChSntNas;
    /**
     * Number of RADIUS access accepts sent to NAS
     *
     * @var int
     */
    protected $numAcsAcpSntNas;
    /**
     * Number of RADIUS access rejects sent to the NAS
     *
     * @var int
     */
    protected $numAcsRejSntNas;
    /**
     * Number of RADIUS accounting requests received from NAS
     *
     * @var int
     */
    protected $numAccRqRcvdNas;
    /**
     * Number of RADIUS accounting responses sent to NAS
     *
     * @var int
     */
    protected $numAccRspSntNas;
    /**
     * Number of CoA sent to NAS
     *
     * @var int
     */
    protected $numCoaSntNas;
    /**
     * Number of successful CoA responses from NAS
     *
     * @var int
     */
    protected $numCoaSucRcdNas;
    /**
     * Number of Failed CoA response from NAS
     *
     * @var int
     */
    protected $numCoaFailRcdNas;
    /**
     * Number of RADIUS DM requests sent to NAS
     *
     * @var int
     */
    protected $numDmSntNas;
    /**
     * Number of RADIUS DM responses received from NAS (Successful)
     *
     * @var int
     */
    protected $numDmSucRcdNas;
    /**
     * Number of RADIUS DM responses received from NAS (Failed)
     *
     * @var int
     */
    protected $numDmFailRcdNas;
    /**
     * Number of CoA authorize only processed
     *
     * @var int
     */
    protected $numAuthOnlyAAA;
    /**
     * Number of successful CoA authorize only procedures
     *
     * @var int
     */
    protected $numAuthOnlySuccAAA;
    /**
     * Number of failed CoA authorize only procedures
     *
     * @var int
     */
    protected $numAuthOnlyFailedAAA;
    /**
     * Time this entry was created
     *
     * @var int
     */
    protected $recCreateTime;
    /**
     * Last time this entry was updated
     *
     * @var int
     */
    protected $recUpdateTime;
    /**
     * Control Balde ID
     *
     * @var string
     */
    protected $cbladeId;
    /**
     * AAA Service Name
     *
     * @var string
     */
    protected $aaaServiceName;
    /**
     * MVNO ID
     *
     * @var string
     */
    protected $mvnoId;
    /**
     * Number of RADIUS DM responses sent to AAA server (Successful)
     *
     * @var int
     */
    protected $numOfDmReqAaa;
    /**
     * Number of RADIUS DM requests received from AAA server
     *
     * @var int
     */
    protected $numOfDmResAaa;
    /**
     * Number of RADIUS DM responses sent to AAA server (Failed)
     *
     * @var int
     */
    protected $numOfDmFailAaa;
    /**
     * Number of AP accounting sessions established (Successful)
     *
     * @var int
     */
    protected $numRadSuccAPAcc;
    /**
     * Number of AP accounting sessions established (Failed)
     *
     * @var int
     */
    protected $numRadFailAPAcc;
    /**
     * Number of AP accounting requests
     *
     * @var int
     */
    protected $numAPAcctReq;
    /**
     * Number of AP accounting responses
     *
     * @var int
     */
    protected $numAPAcctRsp;
    /**
     * Number of dropped authentication requests
     *
     * @var int
     */
    protected $numDroppedRateLimitAuth;
    /**
     * Number of dropped accounting requests
     *
     * @var int
     */
    protected $numDroppedRateLimitAcct;
    /**
     * Control Balde Name
     *
     * @var string
     */
    protected $cbladeName;
    /**
     * MVNO Name
     *
     * @var string
     */
    protected $mvnoName;
    /**
     * AAA IP
     *
     * @return string
     */
    public function getAaASerIp(): string
    {
        return $this->aaASerIp;
    }
    /**
     * AAA IP
     *
     * @param string $aaASerIp
     *
     * @return self
     */
    public function setAaASerIp(string $aaASerIp): self
    {
        $this->initialized['aaASerIp'] = true;
        $this->aaASerIp = $aaASerIp;
        return $this;
    }
    /**
     * NAS Type. 1: Ruckus AP 2: 3rd Party AP
     *
     * @return int
     */
    public function getNasType(): int
    {
        return $this->nasType;
    }
    /**
     * NAS Type. 1: Ruckus AP 2: 3rd Party AP
     *
     * @param int $nasType
     *
     * @return self
     */
    public function setNasType(int $nasType): self
    {
        $this->initialized['nasType'] = true;
        $this->nasType = $nasType;
        return $this;
    }
    /**
     * Number of authentications (Successful)
     *
     * @return int
     */
    public function getNumSuccAuth(): int
    {
        return $this->numSuccAuth;
    }
    /**
     * Number of authentications (Successful)
     *
     * @param int $numSuccAuth
     *
     * @return self
     */
    public function setNumSuccAuth(int $numSuccAuth): self
    {
        $this->initialized['numSuccAuth'] = true;
        $this->numSuccAuth = $numSuccAuth;
        return $this;
    }
    /**
     * Number of authentications (Failed)
     *
     * @return int
     */
    public function getNumFailAuth(): int
    {
        return $this->numFailAuth;
    }
    /**
     * Number of authentications (Failed)
     *
     * @param int $numFailAuth
     *
     * @return self
     */
    public function setNumFailAuth(int $numFailAuth): self
    {
        $this->initialized['numFailAuth'] = true;
        $this->numFailAuth = $numFailAuth;
        return $this;
    }
    /**
     * Number of authentications (Incomplete)
     *
     * @return int
     */
    public function getNumInCompAuth(): int
    {
        return $this->numInCompAuth;
    }
    /**
     * Number of authentications (Incomplete)
     *
     * @param int $numInCompAuth
     *
     * @return self
     */
    public function setNumInCompAuth(int $numInCompAuth): self
    {
        $this->initialized['numInCompAuth'] = true;
        $this->numInCompAuth = $numInCompAuth;
        return $this;
    }
    /**
     * Number of accounting sessions established (Successful)
     *
     * @return int
     */
    public function getNumSuccAcct(): int
    {
        return $this->numSuccAcct;
    }
    /**
     * Number of accounting sessions established (Successful)
     *
     * @param int $numSuccAcct
     *
     * @return self
     */
    public function setNumSuccAcct(int $numSuccAcct): self
    {
        $this->initialized['numSuccAcct'] = true;
        $this->numSuccAcct = $numSuccAcct;
        return $this;
    }
    /**
     * Number of accounting sessions established (Failed)
     *
     * @return int
     */
    public function getNumFailAcct(): int
    {
        return $this->numFailAcct;
    }
    /**
     * Number of accounting sessions established (Failed)
     *
     * @param int $numFailAcct
     *
     * @return self
     */
    public function setNumFailAcct(int $numFailAcct): self
    {
        $this->initialized['numFailAcct'] = true;
        $this->numFailAcct = $numFailAcct;
        return $this;
    }
    /**
     * Number of RADIUS access requests sent to AAA server
     *
     * @return int
     */
    public function getNumOfAccReqAaa(): int
    {
        return $this->numOfAccReqAaa;
    }
    /**
     * Number of RADIUS access requests sent to AAA server
     *
     * @param int $numOfAccReqAaa
     *
     * @return self
     */
    public function setNumOfAccReqAaa(int $numOfAccReqAaa): self
    {
        $this->initialized['numOfAccReqAaa'] = true;
        $this->numOfAccReqAaa = $numOfAccReqAaa;
        return $this;
    }
    /**
     * Number of RADIUS access accepts received from AAA server
     *
     * @return int
     */
    public function getNumOfAccAcceptAaa(): int
    {
        return $this->numOfAccAcceptAaa;
    }
    /**
     * Number of RADIUS access accepts received from AAA server
     *
     * @param int $numOfAccAcceptAaa
     *
     * @return self
     */
    public function setNumOfAccAcceptAaa(int $numOfAccAcceptAaa): self
    {
        $this->initialized['numOfAccAcceptAaa'] = true;
        $this->numOfAccAcceptAaa = $numOfAccAcceptAaa;
        return $this;
    }
    /**
     * Number of RADIUS access rejects received from AAA server
     *
     * @return int
     */
    public function getNumOfAccRejAaa(): int
    {
        return $this->numOfAccRejAaa;
    }
    /**
     * Number of RADIUS access rejects received from AAA server
     *
     * @param int $numOfAccRejAaa
     *
     * @return self
     */
    public function setNumOfAccRejAaa(int $numOfAccRejAaa): self
    {
        $this->initialized['numOfAccRejAaa'] = true;
        $this->numOfAccRejAaa = $numOfAccRejAaa;
        return $this;
    }
    /**
     * Number of RADIUS access challenges received from AAA server
     *
     * @return int
     */
    public function getNumOfAccChallAaa(): int
    {
        return $this->numOfAccChallAaa;
    }
    /**
     * Number of RADIUS access challenges received from AAA server
     *
     * @param int $numOfAccChallAaa
     *
     * @return self
     */
    public function setNumOfAccChallAaa(int $numOfAccChallAaa): self
    {
        $this->initialized['numOfAccChallAaa'] = true;
        $this->numOfAccChallAaa = $numOfAccChallAaa;
        return $this;
    }
    /**
     * Number of RADIUS accounting requests sent to AAA server
     *
     * @return int
     */
    public function getNumOfAcctReqAaa(): int
    {
        return $this->numOfAcctReqAaa;
    }
    /**
     * Number of RADIUS accounting requests sent to AAA server
     *
     * @param int $numOfAcctReqAaa
     *
     * @return self
     */
    public function setNumOfAcctReqAaa(int $numOfAcctReqAaa): self
    {
        $this->initialized['numOfAcctReqAaa'] = true;
        $this->numOfAcctReqAaa = $numOfAcctReqAaa;
        return $this;
    }
    /**
     * Number of RADIUS accounting responses received from AAA server
     *
     * @return int
     */
    public function getNumOfAcctRspAaa(): int
    {
        return $this->numOfAcctRspAaa;
    }
    /**
     * Number of RADIUS accounting responses received from AAA server
     *
     * @param int $numOfAcctRspAaa
     *
     * @return self
     */
    public function setNumOfAcctRspAaa(int $numOfAcctRspAaa): self
    {
        $this->initialized['numOfAcctRspAaa'] = true;
        $this->numOfAcctRspAaa = $numOfAcctRspAaa;
        return $this;
    }
    /**
     * Number of RADIUS CoA requests received from AAA server
     *
     * @return int
     */
    public function getNumOfCoAReqAaa(): int
    {
        return $this->numOfCoAReqAaa;
    }
    /**
     * Number of RADIUS CoA requests received from AAA server
     *
     * @param int $numOfCoAReqAaa
     *
     * @return self
     */
    public function setNumOfCoAReqAaa(int $numOfCoAReqAaa): self
    {
        $this->initialized['numOfCoAReqAaa'] = true;
        $this->numOfCoAReqAaa = $numOfCoAReqAaa;
        return $this;
    }
    /**
     * Number of RADIUS CoA responses sent to AAA server (Successful)
     *
     * @return int
     */
    public function getNumOfCoAResAaa(): int
    {
        return $this->numOfCoAResAaa;
    }
    /**
     * Number of RADIUS CoA responses sent to AAA server (Successful)
     *
     * @param int $numOfCoAResAaa
     *
     * @return self
     */
    public function setNumOfCoAResAaa(int $numOfCoAResAaa): self
    {
        $this->initialized['numOfCoAResAaa'] = true;
        $this->numOfCoAResAaa = $numOfCoAResAaa;
        return $this;
    }
    /**
     * Number of RADIUS CoA responses sent to AAA server (Failed)
     *
     * @return int
     */
    public function getNumOfCoAFailAaa(): int
    {
        return $this->numOfCoAFailAaa;
    }
    /**
     * Number of RADIUS CoA responses sent to AAA server (Failed)
     *
     * @param int $numOfCoAFailAaa
     *
     * @return self
     */
    public function setNumOfCoAFailAaa(int $numOfCoAFailAaa): self
    {
        $this->initialized['numOfCoAFailAaa'] = true;
        $this->numOfCoAFailAaa = $numOfCoAFailAaa;
        return $this;
    }
    /**
     * Number of RADIUS access requests received from NAS
     *
     * @return int
     */
    public function getNumAcsRqRcvdNas(): int
    {
        return $this->numAcsRqRcvdNas;
    }
    /**
     * Number of RADIUS access requests received from NAS
     *
     * @param int $numAcsRqRcvdNas
     *
     * @return self
     */
    public function setNumAcsRqRcvdNas(int $numAcsRqRcvdNas): self
    {
        $this->initialized['numAcsRqRcvdNas'] = true;
        $this->numAcsRqRcvdNas = $numAcsRqRcvdNas;
        return $this;
    }
    /**
     * Number of RADIUS access challenges sent to NAS
     *
     * @return int
     */
    public function getNumAcsChSntNas(): int
    {
        return $this->numAcsChSntNas;
    }
    /**
     * Number of RADIUS access challenges sent to NAS
     *
     * @param int $numAcsChSntNas
     *
     * @return self
     */
    public function setNumAcsChSntNas(int $numAcsChSntNas): self
    {
        $this->initialized['numAcsChSntNas'] = true;
        $this->numAcsChSntNas = $numAcsChSntNas;
        return $this;
    }
    /**
     * Number of RADIUS access accepts sent to NAS
     *
     * @return int
     */
    public function getNumAcsAcpSntNas(): int
    {
        return $this->numAcsAcpSntNas;
    }
    /**
     * Number of RADIUS access accepts sent to NAS
     *
     * @param int $numAcsAcpSntNas
     *
     * @return self
     */
    public function setNumAcsAcpSntNas(int $numAcsAcpSntNas): self
    {
        $this->initialized['numAcsAcpSntNas'] = true;
        $this->numAcsAcpSntNas = $numAcsAcpSntNas;
        return $this;
    }
    /**
     * Number of RADIUS access rejects sent to the NAS
     *
     * @return int
     */
    public function getNumAcsRejSntNas(): int
    {
        return $this->numAcsRejSntNas;
    }
    /**
     * Number of RADIUS access rejects sent to the NAS
     *
     * @param int $numAcsRejSntNas
     *
     * @return self
     */
    public function setNumAcsRejSntNas(int $numAcsRejSntNas): self
    {
        $this->initialized['numAcsRejSntNas'] = true;
        $this->numAcsRejSntNas = $numAcsRejSntNas;
        return $this;
    }
    /**
     * Number of RADIUS accounting requests received from NAS
     *
     * @return int
     */
    public function getNumAccRqRcvdNas(): int
    {
        return $this->numAccRqRcvdNas;
    }
    /**
     * Number of RADIUS accounting requests received from NAS
     *
     * @param int $numAccRqRcvdNas
     *
     * @return self
     */
    public function setNumAccRqRcvdNas(int $numAccRqRcvdNas): self
    {
        $this->initialized['numAccRqRcvdNas'] = true;
        $this->numAccRqRcvdNas = $numAccRqRcvdNas;
        return $this;
    }
    /**
     * Number of RADIUS accounting responses sent to NAS
     *
     * @return int
     */
    public function getNumAccRspSntNas(): int
    {
        return $this->numAccRspSntNas;
    }
    /**
     * Number of RADIUS accounting responses sent to NAS
     *
     * @param int $numAccRspSntNas
     *
     * @return self
     */
    public function setNumAccRspSntNas(int $numAccRspSntNas): self
    {
        $this->initialized['numAccRspSntNas'] = true;
        $this->numAccRspSntNas = $numAccRspSntNas;
        return $this;
    }
    /**
     * Number of CoA sent to NAS
     *
     * @return int
     */
    public function getNumCoaSntNas(): int
    {
        return $this->numCoaSntNas;
    }
    /**
     * Number of CoA sent to NAS
     *
     * @param int $numCoaSntNas
     *
     * @return self
     */
    public function setNumCoaSntNas(int $numCoaSntNas): self
    {
        $this->initialized['numCoaSntNas'] = true;
        $this->numCoaSntNas = $numCoaSntNas;
        return $this;
    }
    /**
     * Number of successful CoA responses from NAS
     *
     * @return int
     */
    public function getNumCoaSucRcdNas(): int
    {
        return $this->numCoaSucRcdNas;
    }
    /**
     * Number of successful CoA responses from NAS
     *
     * @param int $numCoaSucRcdNas
     *
     * @return self
     */
    public function setNumCoaSucRcdNas(int $numCoaSucRcdNas): self
    {
        $this->initialized['numCoaSucRcdNas'] = true;
        $this->numCoaSucRcdNas = $numCoaSucRcdNas;
        return $this;
    }
    /**
     * Number of Failed CoA response from NAS
     *
     * @return int
     */
    public function getNumCoaFailRcdNas(): int
    {
        return $this->numCoaFailRcdNas;
    }
    /**
     * Number of Failed CoA response from NAS
     *
     * @param int $numCoaFailRcdNas
     *
     * @return self
     */
    public function setNumCoaFailRcdNas(int $numCoaFailRcdNas): self
    {
        $this->initialized['numCoaFailRcdNas'] = true;
        $this->numCoaFailRcdNas = $numCoaFailRcdNas;
        return $this;
    }
    /**
     * Number of RADIUS DM requests sent to NAS
     *
     * @return int
     */
    public function getNumDmSntNas(): int
    {
        return $this->numDmSntNas;
    }
    /**
     * Number of RADIUS DM requests sent to NAS
     *
     * @param int $numDmSntNas
     *
     * @return self
     */
    public function setNumDmSntNas(int $numDmSntNas): self
    {
        $this->initialized['numDmSntNas'] = true;
        $this->numDmSntNas = $numDmSntNas;
        return $this;
    }
    /**
     * Number of RADIUS DM responses received from NAS (Successful)
     *
     * @return int
     */
    public function getNumDmSucRcdNas(): int
    {
        return $this->numDmSucRcdNas;
    }
    /**
     * Number of RADIUS DM responses received from NAS (Successful)
     *
     * @param int $numDmSucRcdNas
     *
     * @return self
     */
    public function setNumDmSucRcdNas(int $numDmSucRcdNas): self
    {
        $this->initialized['numDmSucRcdNas'] = true;
        $this->numDmSucRcdNas = $numDmSucRcdNas;
        return $this;
    }
    /**
     * Number of RADIUS DM responses received from NAS (Failed)
     *
     * @return int
     */
    public function getNumDmFailRcdNas(): int
    {
        return $this->numDmFailRcdNas;
    }
    /**
     * Number of RADIUS DM responses received from NAS (Failed)
     *
     * @param int $numDmFailRcdNas
     *
     * @return self
     */
    public function setNumDmFailRcdNas(int $numDmFailRcdNas): self
    {
        $this->initialized['numDmFailRcdNas'] = true;
        $this->numDmFailRcdNas = $numDmFailRcdNas;
        return $this;
    }
    /**
     * Number of CoA authorize only processed
     *
     * @return int
     */
    public function getNumAuthOnlyAAA(): int
    {
        return $this->numAuthOnlyAAA;
    }
    /**
     * Number of CoA authorize only processed
     *
     * @param int $numAuthOnlyAAA
     *
     * @return self
     */
    public function setNumAuthOnlyAAA(int $numAuthOnlyAAA): self
    {
        $this->initialized['numAuthOnlyAAA'] = true;
        $this->numAuthOnlyAAA = $numAuthOnlyAAA;
        return $this;
    }
    /**
     * Number of successful CoA authorize only procedures
     *
     * @return int
     */
    public function getNumAuthOnlySuccAAA(): int
    {
        return $this->numAuthOnlySuccAAA;
    }
    /**
     * Number of successful CoA authorize only procedures
     *
     * @param int $numAuthOnlySuccAAA
     *
     * @return self
     */
    public function setNumAuthOnlySuccAAA(int $numAuthOnlySuccAAA): self
    {
        $this->initialized['numAuthOnlySuccAAA'] = true;
        $this->numAuthOnlySuccAAA = $numAuthOnlySuccAAA;
        return $this;
    }
    /**
     * Number of failed CoA authorize only procedures
     *
     * @return int
     */
    public function getNumAuthOnlyFailedAAA(): int
    {
        return $this->numAuthOnlyFailedAAA;
    }
    /**
     * Number of failed CoA authorize only procedures
     *
     * @param int $numAuthOnlyFailedAAA
     *
     * @return self
     */
    public function setNumAuthOnlyFailedAAA(int $numAuthOnlyFailedAAA): self
    {
        $this->initialized['numAuthOnlyFailedAAA'] = true;
        $this->numAuthOnlyFailedAAA = $numAuthOnlyFailedAAA;
        return $this;
    }
    /**
     * Time this entry was created
     *
     * @return int
     */
    public function getRecCreateTime(): int
    {
        return $this->recCreateTime;
    }
    /**
     * Time this entry was created
     *
     * @param int $recCreateTime
     *
     * @return self
     */
    public function setRecCreateTime(int $recCreateTime): self
    {
        $this->initialized['recCreateTime'] = true;
        $this->recCreateTime = $recCreateTime;
        return $this;
    }
    /**
     * Last time this entry was updated
     *
     * @return int
     */
    public function getRecUpdateTime(): int
    {
        return $this->recUpdateTime;
    }
    /**
     * Last time this entry was updated
     *
     * @param int $recUpdateTime
     *
     * @return self
     */
    public function setRecUpdateTime(int $recUpdateTime): self
    {
        $this->initialized['recUpdateTime'] = true;
        $this->recUpdateTime = $recUpdateTime;
        return $this;
    }
    /**
     * Control Balde ID
     *
     * @return string
     */
    public function getCbladeId(): string
    {
        return $this->cbladeId;
    }
    /**
     * Control Balde ID
     *
     * @param string $cbladeId
     *
     * @return self
     */
    public function setCbladeId(string $cbladeId): self
    {
        $this->initialized['cbladeId'] = true;
        $this->cbladeId = $cbladeId;
        return $this;
    }
    /**
     * AAA Service Name
     *
     * @return string
     */
    public function getAaaServiceName(): string
    {
        return $this->aaaServiceName;
    }
    /**
     * AAA Service Name
     *
     * @param string $aaaServiceName
     *
     * @return self
     */
    public function setAaaServiceName(string $aaaServiceName): self
    {
        $this->initialized['aaaServiceName'] = true;
        $this->aaaServiceName = $aaaServiceName;
        return $this;
    }
    /**
     * MVNO ID
     *
     * @return string
     */
    public function getMvnoId(): string
    {
        return $this->mvnoId;
    }
    /**
     * MVNO ID
     *
     * @param string $mvnoId
     *
     * @return self
     */
    public function setMvnoId(string $mvnoId): self
    {
        $this->initialized['mvnoId'] = true;
        $this->mvnoId = $mvnoId;
        return $this;
    }
    /**
     * Number of RADIUS DM responses sent to AAA server (Successful)
     *
     * @return int
     */
    public function getNumOfDmReqAaa(): int
    {
        return $this->numOfDmReqAaa;
    }
    /**
     * Number of RADIUS DM responses sent to AAA server (Successful)
     *
     * @param int $numOfDmReqAaa
     *
     * @return self
     */
    public function setNumOfDmReqAaa(int $numOfDmReqAaa): self
    {
        $this->initialized['numOfDmReqAaa'] = true;
        $this->numOfDmReqAaa = $numOfDmReqAaa;
        return $this;
    }
    /**
     * Number of RADIUS DM requests received from AAA server
     *
     * @return int
     */
    public function getNumOfDmResAaa(): int
    {
        return $this->numOfDmResAaa;
    }
    /**
     * Number of RADIUS DM requests received from AAA server
     *
     * @param int $numOfDmResAaa
     *
     * @return self
     */
    public function setNumOfDmResAaa(int $numOfDmResAaa): self
    {
        $this->initialized['numOfDmResAaa'] = true;
        $this->numOfDmResAaa = $numOfDmResAaa;
        return $this;
    }
    /**
     * Number of RADIUS DM responses sent to AAA server (Failed)
     *
     * @return int
     */
    public function getNumOfDmFailAaa(): int
    {
        return $this->numOfDmFailAaa;
    }
    /**
     * Number of RADIUS DM responses sent to AAA server (Failed)
     *
     * @param int $numOfDmFailAaa
     *
     * @return self
     */
    public function setNumOfDmFailAaa(int $numOfDmFailAaa): self
    {
        $this->initialized['numOfDmFailAaa'] = true;
        $this->numOfDmFailAaa = $numOfDmFailAaa;
        return $this;
    }
    /**
     * Number of AP accounting sessions established (Successful)
     *
     * @return int
     */
    public function getNumRadSuccAPAcc(): int
    {
        return $this->numRadSuccAPAcc;
    }
    /**
     * Number of AP accounting sessions established (Successful)
     *
     * @param int $numRadSuccAPAcc
     *
     * @return self
     */
    public function setNumRadSuccAPAcc(int $numRadSuccAPAcc): self
    {
        $this->initialized['numRadSuccAPAcc'] = true;
        $this->numRadSuccAPAcc = $numRadSuccAPAcc;
        return $this;
    }
    /**
     * Number of AP accounting sessions established (Failed)
     *
     * @return int
     */
    public function getNumRadFailAPAcc(): int
    {
        return $this->numRadFailAPAcc;
    }
    /**
     * Number of AP accounting sessions established (Failed)
     *
     * @param int $numRadFailAPAcc
     *
     * @return self
     */
    public function setNumRadFailAPAcc(int $numRadFailAPAcc): self
    {
        $this->initialized['numRadFailAPAcc'] = true;
        $this->numRadFailAPAcc = $numRadFailAPAcc;
        return $this;
    }
    /**
     * Number of AP accounting requests
     *
     * @return int
     */
    public function getNumAPAcctReq(): int
    {
        return $this->numAPAcctReq;
    }
    /**
     * Number of AP accounting requests
     *
     * @param int $numAPAcctReq
     *
     * @return self
     */
    public function setNumAPAcctReq(int $numAPAcctReq): self
    {
        $this->initialized['numAPAcctReq'] = true;
        $this->numAPAcctReq = $numAPAcctReq;
        return $this;
    }
    /**
     * Number of AP accounting responses
     *
     * @return int
     */
    public function getNumAPAcctRsp(): int
    {
        return $this->numAPAcctRsp;
    }
    /**
     * Number of AP accounting responses
     *
     * @param int $numAPAcctRsp
     *
     * @return self
     */
    public function setNumAPAcctRsp(int $numAPAcctRsp): self
    {
        $this->initialized['numAPAcctRsp'] = true;
        $this->numAPAcctRsp = $numAPAcctRsp;
        return $this;
    }
    /**
     * Number of dropped authentication requests
     *
     * @return int
     */
    public function getNumDroppedRateLimitAuth(): int
    {
        return $this->numDroppedRateLimitAuth;
    }
    /**
     * Number of dropped authentication requests
     *
     * @param int $numDroppedRateLimitAuth
     *
     * @return self
     */
    public function setNumDroppedRateLimitAuth(int $numDroppedRateLimitAuth): self
    {
        $this->initialized['numDroppedRateLimitAuth'] = true;
        $this->numDroppedRateLimitAuth = $numDroppedRateLimitAuth;
        return $this;
    }
    /**
     * Number of dropped accounting requests
     *
     * @return int
     */
    public function getNumDroppedRateLimitAcct(): int
    {
        return $this->numDroppedRateLimitAcct;
    }
    /**
     * Number of dropped accounting requests
     *
     * @param int $numDroppedRateLimitAcct
     *
     * @return self
     */
    public function setNumDroppedRateLimitAcct(int $numDroppedRateLimitAcct): self
    {
        $this->initialized['numDroppedRateLimitAcct'] = true;
        $this->numDroppedRateLimitAcct = $numDroppedRateLimitAcct;
        return $this;
    }
    /**
     * Control Balde Name
     *
     * @return string
     */
    public function getCbladeName(): string
    {
        return $this->cbladeName;
    }
    /**
     * Control Balde Name
     *
     * @param string $cbladeName
     *
     * @return self
     */
    public function setCbladeName(string $cbladeName): self
    {
        $this->initialized['cbladeName'] = true;
        $this->cbladeName = $cbladeName;
        return $this;
    }
    /**
     * MVNO Name
     *
     * @return string
     */
    public function getMvnoName(): string
    {
        return $this->mvnoName;
    }
    /**
     * MVNO Name
     *
     * @param string $mvnoName
     *
     * @return self
     */
    public function setMvnoName(string $mvnoName): self
    {
        $this->initialized['mvnoName'] = true;
        $this->mvnoName = $mvnoName;
        return $this;
    }
}