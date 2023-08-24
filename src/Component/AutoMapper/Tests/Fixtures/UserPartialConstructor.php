<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class UserPartialConstructor
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

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int|string $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }
}
