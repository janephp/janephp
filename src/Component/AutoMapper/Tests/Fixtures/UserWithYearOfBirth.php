<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\Groups;

class UserWithYearOfBirth
{
    /**
     * @Groups({"read"})
     *
     * @var string
     */
    public $name;

    /**
     * @Groups({"read"})
     *
     * @var int|string
     */
    public $age;
    /**
     * @Groups({"read"})
     *
     * @var int
     */
    private $id;

    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @Groups({"read"})
     */
    public function getYearOfBirth()
    {
        return ((int) date('Y')) - ((int) $this->age);
    }
}
