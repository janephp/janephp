<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCreateTrustedCAChain
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