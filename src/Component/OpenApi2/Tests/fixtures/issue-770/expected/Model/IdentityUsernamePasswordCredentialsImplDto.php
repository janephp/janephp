<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityUsernamePasswordCredentialsImplDto
{
    /**
     * Login Name
     *
     * @var string
     */
    public string $loginName;
    /**
     * Login Password
     *
     * @var string
     */
    public string $loginPassword;
    /**
     * identifier of the UsernamePasswordCredentialsImplDto
     *
     * @var string
     */
    public string $key;
    /**
     * Service Provider Id
     *
     * @var string
     */
    public string $serviceProviderId;
    /**
     * Creation Date
     *
     * @var int
     */
    public int $creationDate;
    /**
     * Expiration Date
     *
     * @var int
     */
    public int $expirationDate;
    /**
     * Authentication Method
     *
     * @var string
     */
    public string $authenticationMethod;
    /**
     * @var IdentityAuthenticationServerConfig
     */
    public IdentityAuthenticationServerConfig $authenticationServerConfig;
    /**
     * Creation Date of Password
     *
     * @var string
     */
    public string $passwordCreation;
    /**
     * Expiration Date of Password
     *
     * @var string
     */
    public string $passwordExpiration;
}