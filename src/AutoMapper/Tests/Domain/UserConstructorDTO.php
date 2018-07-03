<?php

declare(strict_types=1);

namespace Jane\AutoMapper\Tests\Domain;

class UserConstructorDTO
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var string|int
     */
    private $age;

    public function __construct(string $id, string $name, int $age = 30)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|string
     */
    public function getAge()
    {
        return $this->age;
    }
}
