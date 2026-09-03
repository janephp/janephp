<?php

namespace Jane\Component\JsonSchema\Tests\Expected\DatetimeInterface\Model;

class Test
{
    /**
     * @var \DateTimeInterface
     */
    public \DateTimeInterface $date;
    /**
     * @var \DateTimeInterface|null
     */
    public ?\DateTimeInterface $dateOrNull;
    /**
     * @var \DateTimeInterface|null|int
     */
    public $dateOrNullOrInt;
}