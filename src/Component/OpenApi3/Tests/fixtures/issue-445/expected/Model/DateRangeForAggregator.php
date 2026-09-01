<?php

namespace PicturePark\API\Model;

class DateRangeForAggregator
{
    /**
     * Language specific range names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @var string|null
     */
    public ?string $from;
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @var string|null
     */
    public ?string $to;
}