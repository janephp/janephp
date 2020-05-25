<?php

namespace Jane\AutoMapper\Tests\Fixtures;

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

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var float
     */
    public $money;

    /**
     * @var iterable
     */
    public $languages;

    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->email = 'test';
        $this->createdAt = new \DateTime();
        $this->money = 20.10;
        $this->languages = new \ArrayObject();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
