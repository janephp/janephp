<?php

namespace Jane\AutoMapper\Tests\Domain;

class UserDTO
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $yearOfBirth;

    /**
     * @var string
     */
    public $email;

    /**
     * @var AddressDTO|null
     */
    public $address;

    /**
     * @var AddressDTO[]
     */
    public $addresses = [];
}
