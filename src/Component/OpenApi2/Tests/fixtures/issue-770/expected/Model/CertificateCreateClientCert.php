<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCreateClientCert
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
     * The value must be in PEM format which is a Base64 encoded DER client certificate.
     *
     * @var string
     */
    public string $data;
    /**
     * The value must be in PEM format which is a Base64 encoded DER client certificate.
     *
     * @var list<string>
     */
    public array $intermediateData;
    /**
     * The value must be in PEM format which is a Base64 encoded DER client certificate.
     *
     * @var string
     */
    public string $rootData;
    /**
     * The value must be in PEM format which is a Base64 encoded DER client certificate.
     *
     * @var string
     */
    public string $privateKeyData;
}