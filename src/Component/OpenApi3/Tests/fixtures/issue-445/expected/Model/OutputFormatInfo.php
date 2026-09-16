<?php

namespace PicturePark\API\Model;

class OutputFormatInfo
{
    /**
     * Output ID.
     *
     * @var string
     */
    public string $id;
    /**
     * Output translations.
     *
     * @var iterable<string, string>
     */
    public iterable $names;
}