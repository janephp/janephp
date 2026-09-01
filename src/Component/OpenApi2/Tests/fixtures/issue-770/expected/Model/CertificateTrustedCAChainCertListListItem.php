<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateTrustedCAChainCertListListItem
{
    /**
     * Identifier of the trusted CA chain certificate
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $modifierUsername;
    /**
     * @var string
     */
    public string $modifiedDateTime;
    /**
     * Information of the certificates
     *
     * @var string
     */
    public string $information;
    /**
     * Intermediate data of the trusted CA chain certificates
     *
     * @var list<string>
     */
    public array $interCertData;
    /**
     * Root data of the trusted CA chain certificates
     *
     * @var string
     */
    public string $rootCertData;
}