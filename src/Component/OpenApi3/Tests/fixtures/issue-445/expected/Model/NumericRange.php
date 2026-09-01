<?php

namespace PicturePark\API\Model;

class NumericRange
{
    /**
     * Language specific range names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * The from value.
     *
     * @var float|null
     */
    public ?float $from;
    /**
     * The to value.
     *
     * @var float|null
     */
    public ?float $to;
}