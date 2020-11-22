<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\Groups;

class Bar
{
    /**
     * @var int|null
     *
     * @Groups({"group2", "group3"})
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }
}
