<?php

namespace Docker\Api\Model;

class TLSInfo
{
    /**
     * The root CA certificate(s) that are used to validate leaf TLS
     * certificates.
     * 
     *
     * @var string
     */
    public string $trustRoot;
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer.
     *
     * @var string
     */
    public string $certIssuerSubject;
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer.
     * 
     *
     * @var string
     */
    public string $certIssuerPublicKey;
}