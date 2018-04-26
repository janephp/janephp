<?php

declare(strict_types=1);

namespace Jane\AutoMapper\Tests\Domain;

class UserConstructorDTO
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|int
     */
    public $age;

    public function __construct(string $id, string $name, int $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }
}
