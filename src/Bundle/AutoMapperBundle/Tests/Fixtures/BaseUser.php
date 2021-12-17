<?php

namespace Jane\Bundle\AutoMapperBundle\Tests\Fixtures;

class BaseUser
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int|string
     */
    public $age;

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

    /**
     * @var mixed[]
     */
    protected $properties = [];
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

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

    public function getProperties(): iterable
    {
        return $this->properties;
    }

    public function setProperties(iterable $properties): void
    {
        $this->properties = $properties;
    }
}
