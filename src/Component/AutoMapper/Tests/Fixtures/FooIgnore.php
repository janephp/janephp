<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\Ignore;

class FooIgnore
{
    /**
     * @var int
     *
     * @Ignore
     */
    public $id;

    public function getId(): int
    {
        return $this->id;
    }
}
