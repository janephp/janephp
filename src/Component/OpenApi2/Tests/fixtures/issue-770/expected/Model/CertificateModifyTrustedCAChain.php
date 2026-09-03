<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CertificateModifyTrustedCAChain
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