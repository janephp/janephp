<?php

namespace Jane\AutoMapper\Tests\Domain;

use Symfony\Component\Serializer\Annotation\MaxDepth;

class FooMaxDepth
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var FooMaxDepth|null
     *
     * @MaxDepth(2)
     */
    private $child;

    public function __construct(int $id, ?self $child = null)
    {
        $this->id = $id;
        $this->child = $child;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getChild(): ?self
    {
        return $this->child;
    }
}
