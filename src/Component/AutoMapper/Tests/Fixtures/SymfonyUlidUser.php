<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Uid\Ulid;

class SymfonyUlidUser
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var Ulid
     */
    private $ulid;

    public function __construct(Ulid $ulid, string $name)
    {
        $this->ulid = $ulid;
        $this->name = $name;
    }

    public function getUlid(): Ulid
    {
        return $this->ulid;
    }
}
