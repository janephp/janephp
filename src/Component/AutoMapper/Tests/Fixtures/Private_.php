<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class Private_
{
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
