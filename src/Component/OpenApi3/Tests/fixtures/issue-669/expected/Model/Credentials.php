<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Credentials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The URL used to access the cluster API server.
     *
     * @var string
     */
    protected $server;
    /**
     * A base64 encoding of bytes representing the certificate authority data for accessing the cluster.
     *
     * @var string
     */
    protected $certificateAuthorityData;
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
    protected $clientCertificateData;
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
    protected $clientKeyData;
    /**
     * An access token used to authenticate with the cluster. This is only returned for clusters with support for token-based authentication.
     *
     * @var string
     */
    protected $token;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the access token expires.
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * The URL used to access the cluster API server.
     *
     * @return string
     */
    public function getServer(): string
    {
        return $this->server;
    }
    /**
     * The URL used to access the cluster API server.
     *
     * @param string $server
     *
     * @return self
     */
    public function setServer(string $server): self
    {
        $this->initialized['server'] = true;
        $this->server = $server;
        return $this;
    }
    /**
     * A base64 encoding of bytes representing the certificate authority data for accessing the cluster.
     *
     * @return string
     */
    public function getCertificateAuthorityData(): string
    {
        return $this->certificateAuthorityData;
    }
    /**
     * A base64 encoding of bytes representing the certificate authority data for accessing the cluster.
     *
     * @param string $certificateAuthorityData
     *
     * @return self
     */
    public function setCertificateAuthorityData(string $certificateAuthorityData): self
    {
        $this->initialized['certificateAuthorityData'] = true;
        $this->certificateAuthorityData = $certificateAuthorityData;
        return $this;
    }
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
     * @return string|null
     */
    public function getClientCertificateData(): ?string
    {
        return $this->clientCertificateData;
    }
    /**
    * A base64 encoding of bytes representing the x509 client
    certificate data for access the cluster. This is only returned for clusters
    without support for token-based authentication.
    
    Newly created Kubernetes clusters do not return credentials using
    certificate-based authentication. For additional information,
    [see here](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/#authenticate).
    
    *
    * @param string|null $clientCertificateData
    *
    * @deprecated
    *
    * @return self
    */
    public function setClientCertificateData(?string $clientCertificateData): self
    {
        $this->initialized['clientCertificateData'] = true;
        $this->clientCertificateData = $clientCertificateData;
        return $this;
    }
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
     * @return string|null
     */
    public function getClientKeyData(): ?string
    {
        return $this->clientKeyData;
    }
    /**
    * A base64 encoding of bytes representing the x509 client key
    data for access the cluster. This is only returned for clusters without
    support for token-based authentication.
    
    Newly created Kubernetes clusters do not return credentials using
    certificate-based authentication. For additional information,
    [see here](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/#authenticate).
    
    *
    * @param string|null $clientKeyData
    *
    * @deprecated
    *
    * @return self
    */
    public function setClientKeyData(?string $clientKeyData): self
    {
        $this->initialized['clientKeyData'] = true;
        $this->clientKeyData = $clientKeyData;
        return $this;
    }
    /**
     * An access token used to authenticate with the cluster. This is only returned for clusters with support for token-based authentication.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * An access token used to authenticate with the cluster. This is only returned for clusters with support for token-based authentication.
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the access token expires.
     *
     * @return \DateTime
     */
    public function getExpiresAt(): \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the access token expires.
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['server' => ['server', 'getServer', 'setServer'], 'certificateAuthorityData' => ['certificate_authority_data', 'getCertificateAuthorityData', 'setCertificateAuthorityData'], 'clientCertificateData' => ['client_certificate_data', 'getClientCertificateData', 'setClientCertificateData'], 'clientKeyData' => ['client_key_data', 'getClientKeyData', 'setClientKeyData'], 'token' => ['token', 'getToken', 'setToken'], 'expiresAt' => ['expires_at', 'getExpiresAt', 'setExpiresAt']];
    }
}