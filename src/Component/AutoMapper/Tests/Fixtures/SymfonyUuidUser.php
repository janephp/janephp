<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Uid\Uuid;

class SymfonyUuidUser
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var Uuid
     */
    private $uuid;

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
