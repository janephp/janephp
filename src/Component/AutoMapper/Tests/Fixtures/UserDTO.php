<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class UserDTO
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    private $name;

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

    /**
     * @var \DateTime|null
     */
    public $createdAt;

    /**
     * @var array|null
     */
    public $money;

    /**
     * @var array
     */
    public $languages = [];

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
