<?php

namespace Jane\Component\JsonSchema\Tests\Expected\DateFormat\Model;

class Test
{
    /**
     * @var \DateTime
     */
    public \DateTime $date;
    /**
     * @var \DateTime|null
     */
    public ?\DateTime $dateOrNull;
    /**
     * @var \DateTime|null|int
     */
    public $dateOrNullOrInt;
}