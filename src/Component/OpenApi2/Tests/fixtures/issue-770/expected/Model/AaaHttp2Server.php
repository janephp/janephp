<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaHttp2Server
{
    /**
     * Identifier of the HTTP2 server
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the HTTP2 server belongs to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Name of the HTTP2 server
     *
     * @var string
     */
    public string $name;
    /**
     * Description of the HTTP2 server
     *
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
    public int $sseTimeout;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
}