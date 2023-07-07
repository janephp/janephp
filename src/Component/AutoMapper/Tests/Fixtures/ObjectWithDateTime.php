<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

final class ObjectWithDateTime
{
    /**
     * @var \DateTimeInterface
     */
    public $dateTime;

    public function __construct(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
    }
}
