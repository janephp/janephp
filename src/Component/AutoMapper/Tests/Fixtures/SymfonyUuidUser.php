<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Uid\Uuid;

class SymfonyUuidUser
{
    /**
     * @var Uuid
     */
    private $uuid;

    /**
     * @var string
     */
    public $name;

    public function __construct(Uuid $uuid, string $name)
    {
        $this->uuid = $uuid;
        $this->name = $name;
    }

    public function getUuid(): Uuid
    {
        return $this->uuid;
    }
}
