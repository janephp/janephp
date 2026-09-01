<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCreateCert
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
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var string
     */
    public string $data;
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var list<string>
     */
    public array $intermediateData;
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var string
     */
    public string $rootData;
    /**
     * Incompatible with certificasSigningRequest. Must choose one to enter. The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var string
     */
    public string $privateKeyData;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $certificasSigningRequest;
    /**
     * Key passphrase
     *
     * @var string
     */
    public string $passphrase;
}