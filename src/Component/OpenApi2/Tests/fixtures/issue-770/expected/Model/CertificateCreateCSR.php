<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCreateCSR
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
     * @var string
     */
    public string $commonName;
    /**
     * @var string
     */
    public string $email;
    /**
     * Organization of the certificates signing request
     *
     * @var string
     */
    public string $organization;
    /**
     * Organization unit of the certificates signing request
     *
     * @var string
     */
    public string $organizationUnit;
    /**
     * City of the certificates signing request
     *
     * @var string
     */
    public string $city;
    /**
     * State of the certificates signing request
     *
     * @var string
     */
    public string $state;
    /**
     * Country code of the certificates signing request
     *
     * @var string
     */
    public string $countryCode;
}