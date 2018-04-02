<?php

namespace Jane\AutoMapper\Tests\Domain;

class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string|int
     */
    public $age;
    /**
     * @var string
     */
    private $email;

    /**
     * @var Address
     */
    public $address;

    /**
     * @var Address[]
     */
    public $addresses = [];

    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->email = 'test';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
