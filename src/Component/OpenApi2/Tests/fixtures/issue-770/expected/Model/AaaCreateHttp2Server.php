<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaCreateHttp2Server
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
     * The partner name of the HTTP2 server
     *
     * @var string
     */
    public string $partnerName;
    /**
     * The token of the HTTP2 server
     *
     * @var string
     */
    public string $token;
    /**
     * The authentication API of the HTTP2 server
     *
     * @var string
     */
    public string $authenticationApi;
    /**
     * The accounting API of the HTTP2 server
     *
     * @var string
     */
    public string $accountingApi;
    /**
     * The COA response API of the HTTP2 server
     *
     * @var string
     */
    public string $coaResponseApi;
    /**
     * The COA API of the HTTP2 server
     *
     * @var string
     */
    public string $coaApi;
    /**
     * The SSE timeout of the HTTP2 server
     *
     * @var int
     */
    public int $sseTimeout = 60;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
}