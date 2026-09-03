<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CertificateCertificate
{
    /**
     * Identifier of the certificate
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
     * Data of the certificate
     *
     * @var string
     */
    public string $data;
    /**
     * Information of the certificate
     *
     * @var string
     */
    public string $information;
    /**
     * Intermediate data of the certificate
     *
     * @var list<string>
     */
    public array $intermediateData;
    /**
     * Root data of the certificate
     *
     * @var string
     */
    public string $rootData;
    /**
     * Private key data of the certificate
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
    /**
     * Public key data of the certificate
     *
     * @var string
     */
    public string $publicKey;
}