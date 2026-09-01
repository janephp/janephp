<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateClientCert
{
    /**
     * Identifier of the client certificate
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
     * Data of the client certificate
     *
     * @var string
     */
    public string $data;
    /**
     * Information of the client certificate
     *
     * @var string
     */
    public string $information;
    /**
     * Intermediate data of the client certificate
     *
     * @var list<string>
     */
    public array $intermediateData;
    /**
     * Root data of the client certificate
     *
     * @var string
     */
    public string $rootData;
    /**
     * Private key data of the client certificate
     *
     * @var string
     */
    public string $privateKeyData;
    /**
     * Public key data of the client certificate
     *
     * @var string
     */
    public string $publicKey;
}