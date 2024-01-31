<?php

namespace Docker\Api\Model;

class TLSInfo
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The root CA certificate(s) that are used to validate leaf TLS
    certificates.
    
    *
    * @var string
    */
    protected $trustRoot;
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer.
     *
     * @var string
     */
    protected $certIssuerSubject;
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer.
     *
     * @var string
     */
    protected $certIssuerPublicKey;
    /**
    * The root CA certificate(s) that are used to validate leaf TLS
    certificates.
    
    *
    * @return string
    */
    public function getTrustRoot() : string
    {
        return $this->trustRoot;
    }
    /**
    * The root CA certificate(s) that are used to validate leaf TLS
    certificates.
    
    *
    * @param string $trustRoot
    *
    * @return self
    */
    public function setTrustRoot(string $trustRoot) : self
    {
        $this->initialized['trustRoot'] = true;
        $this->trustRoot = $trustRoot;
        return $this;
    }
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer.
     *
     * @return string
     */
    public function getCertIssuerSubject() : string
    {
        return $this->certIssuerSubject;
    }
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer.
     *
     * @param string $certIssuerSubject
     *
     * @return self
     */
    public function setCertIssuerSubject(string $certIssuerSubject) : self
    {
        $this->initialized['certIssuerSubject'] = true;
        $this->certIssuerSubject = $certIssuerSubject;
        return $this;
    }
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer.
     *
     * @return string
     */
    public function getCertIssuerPublicKey() : string
    {
        return $this->certIssuerPublicKey;
    }
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer.
     *
     * @param string $certIssuerPublicKey
     *
     * @return self
     */
    public function setCertIssuerPublicKey(string $certIssuerPublicKey) : self
    {
        $this->initialized['certIssuerPublicKey'] = true;
        $this->certIssuerPublicKey = $certIssuerPublicKey;
        return $this;
    }
}