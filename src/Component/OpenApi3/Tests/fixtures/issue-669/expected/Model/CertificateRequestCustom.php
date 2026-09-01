<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CertificateRequestCustom implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique human-readable name referring to a certificate.
     *
     * @var string
     */
    public string $name;
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @var string
     */
    public string $type;
    /**
     * The contents of a PEM-formatted private-key corresponding to the SSL certificate.
     *
     * @var string
     */
    public string $privateKey;
    /**
     * The contents of a PEM-formatted public SSL certificate.
     *
     * @var string
     */
    public string $leafCertificate;
    /**
     * The full PEM-formatted trust chain between the certificate authority's certificate and your domain's SSL certificate.
     *
     * @var string
     */
    public string $certificateChain;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'type' => 'type', 'privateKey' => 'private_key', 'leafCertificate' => 'leaf_certificate', 'certificateChain' => 'certificate_chain'];
    }
}