<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Credentials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The URL used to access the cluster API server.
     *
     * @var string
     */
    public string $server;
    /**
     * A base64 encoding of bytes representing the certificate authority data for accessing the cluster.
     *
     * @var string
     */
    public string $certificateAuthorityData;
    /**
     * A base64 encoding of bytes representing the x509 client
     * certificate data for access the cluster. This is only returned for clusters
     * without support for token-based authentication.
     * 
     * Newly created Kubernetes clusters do not return credentials using
     * certificate-based authentication. For additional information,
     * [see here](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/#authenticate).
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    public ?string $clientCertificateData;
    /**
     * A base64 encoding of bytes representing the x509 client key
     * data for access the cluster. This is only returned for clusters without
     * support for token-based authentication.
     * 
     * Newly created Kubernetes clusters do not return credentials using
     * certificate-based authentication. For additional information,
     * [see here](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/#authenticate).
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    public ?string $clientKeyData;
    /**
     * An access token used to authenticate with the cluster. This is only returned for clusters with support for token-based authentication.
     *
     * @var string
     */
    public string $token;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the access token expires.
     *
     * @var \DateTime
     */
    public \DateTime $expiresAt;
    public function definedProperties(): array
    {
        return ['server' => 'server', 'certificateAuthorityData' => 'certificate_authority_data', 'clientCertificateData' => 'client_certificate_data', 'clientKeyData' => 'client_key_data', 'token' => 'token', 'expiresAt' => 'expires_at'];
    }
}