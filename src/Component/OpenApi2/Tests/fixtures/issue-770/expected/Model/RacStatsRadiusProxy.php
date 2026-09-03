<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class RacStatsRadiusProxy
{
    /**
     * AAA IP
     *
     * @var string
     */
    public string $aaASerIp;
    /**
     * NAS Type. 1: Ruckus AP 2: 3rd Party AP
     *
     * @var int
     */
    public int $nasType;
    /**
     * Number of authentications (Successful)
     *
     * @var int
     */
    public int $numSuccAuth;
    /**
     * Number of authentications (Failed)
     *
     * @var int
     */
    public int $numFailAuth;
    /**
     * Number of authentications (Incomplete)
     *
     * @var int
     */
    public int $numInCompAuth;
    /**
     * Number of accounting sessions established (Successful)
     *
     * @var int
     */
    public int $numSuccAcct;
    /**
     * Number of accounting sessions established (Failed)
     *
     * @var int
     */
    public int $numFailAcct;
    /**
     * Number of RADIUS access requests sent to AAA server
     *
     * @var int
     */
    public int $numOfAccReqAaa;
    /**
     * Number of RADIUS access accepts received from AAA server
     *
     * @var int
     */
    public int $numOfAccAcceptAaa;
    /**
     * Number of RADIUS access rejects received from AAA server
     *
     * @var int
     */
    public int $numOfAccRejAaa;
    /**
     * Number of RADIUS access challenges received from AAA server
     *
     * @var int
     */
    public int $numOfAccChallAaa;
    /**
     * Number of RADIUS accounting requests sent to AAA server
     *
     * @var int
     */
    public int $numOfAcctReqAaa;
    /**
     * Number of RADIUS accounting responses received from AAA server
     *
     * @var int
     */
    public int $numOfAcctRspAaa;
    /**
     * Number of RADIUS CoA requests received from AAA server
     *
     * @var int
     */
    public int $numOfCoAReqAaa;
    /**
     * Number of RADIUS CoA responses sent to AAA server (Successful)
     *
     * @var int
     */
    public int $numOfCoAResAaa;
    /**
     * Number of RADIUS CoA responses sent to AAA server (Failed)
     *
     * @var int
     */
    public int $numOfCoAFailAaa;
    /**
     * Number of RADIUS access requests received from NAS
     *
     * @var int
     */
    public int $numAcsRqRcvdNas;
    /**
     * Number of RADIUS access challenges sent to NAS
     *
     * @var int
     */
    public int $numAcsChSntNas;
    /**
     * Number of RADIUS access accepts sent to NAS
     *
     * @var int
     */
    public int $numAcsAcpSntNas;
    /**
     * Number of RADIUS access rejects sent to the NAS
     *
     * @var int
     */
    public int $numAcsRejSntNas;
    /**
     * Number of RADIUS accounting requests received from NAS
     *
     * @var int
     */
    public int $numAccRqRcvdNas;
    /**
     * Number of RADIUS accounting responses sent to NAS
     *
     * @var int
     */
    public int $numAccRspSntNas;
    /**
     * Number of CoA sent to NAS
     *
     * @var int
     */
    public int $numCoaSntNas;
    /**
     * Number of successful CoA responses from NAS
     *
     * @var int
     */
    public int $numCoaSucRcdNas;
    /**
     * Number of Failed CoA response from NAS
     *
     * @var int
     */
    public int $numCoaFailRcdNas;
    /**
     * Number of RADIUS DM requests sent to NAS
     *
     * @var int
     */
    public int $numDmSntNas;
    /**
     * Number of RADIUS DM responses received from NAS (Successful)
     *
     * @var int
     */
    public int $numDmSucRcdNas;
    /**
     * Number of RADIUS DM responses received from NAS (Failed)
     *
     * @var int
     */
    public int $numDmFailRcdNas;
    /**
     * Number of CoA authorize only processed
     *
     * @var int
     */
    public int $numAuthOnlyAAA;
    /**
     * Number of successful CoA authorize only procedures
     *
     * @var int
     */
    public int $numAuthOnlySuccAAA;
    /**
     * Number of failed CoA authorize only procedures
     *
     * @var int
     */
    public int $numAuthOnlyFailedAAA;
    /**
     * Time this entry was created
     *
     * @var int
     */
    public int $recCreateTime;
    /**
     * Last time this entry was updated
     *
     * @var int
     */
    public int $recUpdateTime;
    /**
     * Control Balde ID
     *
     * @var string
     */
    public string $cbladeId;
    /**
     * AAA Service Name
     *
     * @var string
     */
    public string $aaaServiceName;
    /**
     * MVNO ID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Number of RADIUS DM responses sent to AAA server (Successful)
     *
     * @var int
     */
    public int $numOfDmReqAaa;
    /**
     * Number of RADIUS DM requests received from AAA server
     *
     * @var int
     */
    public int $numOfDmResAaa;
    /**
     * Number of RADIUS DM responses sent to AAA server (Failed)
     *
     * @var int
     */
    public int $numOfDmFailAaa;
    /**
     * Number of AP accounting sessions established (Successful)
     *
     * @var int
     */
    public int $numRadSuccAPAcc;
    /**
     * Number of AP accounting sessions established (Failed)
     *
     * @var int
     */
    public int $numRadFailAPAcc;
    /**
     * Number of AP accounting requests
     *
     * @var int
     */
    public int $numAPAcctReq;
    /**
     * Number of AP accounting responses
     *
     * @var int
     */
    public int $numAPAcctRsp;
    /**
     * Number of dropped authentication requests
     *
     * @var int
     */
    public int $numDroppedRateLimitAuth;
    /**
     * Number of dropped accounting requests
     *
     * @var int
     */
    public int $numDroppedRateLimitAcct;
    /**
     * Control Balde Name
     *
     * @var string
     */
    public string $cbladeName;
    /**
     * MVNO Name
     *
     * @var string
     */
    public string $mvnoName;
}