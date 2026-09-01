<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateTrustedCAChain
{
    /**
     * Identifier of the trusted CA chain certificates
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