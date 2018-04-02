<?php

namespace Jane\AutoMapper\Tests\Domain;

use Symfony\Component\Serializer\Annotation\Groups;

class Foo
{
    /**
     * @var int
     *
     * @Groups({"test"})
     */
    private $id = 0;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
