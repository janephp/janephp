<?php

namespace PicturePark\API\Model;

class UserAddress
{
    /**
     * Company address line
     *
     * @var string|null
     */
    public ?string $company;
    /**
     * Company department.
     *
     * @var string|null
     */
    public ?string $department;
    /**
     * Street and house number.
     *
     * @var string|null
     */
    public ?string $address;
    /**
     * Additional address line.
     *
     * @var string|null
     */
    public ?string $alternativeAddress;
    /**
     * ZIP code.
     *
     * @var string|null
     */
    public ?string $zip;
    /**
     * City or town.
     *
     * @var string|null
     */
    public ?string $city;
    /**
     * Phone number.
     *
     * @var string|null
     */
    public ?string $phone;
    /**
     * Country code.
     *
     * @var string|null
     */
    public ?string $countryCode;
}