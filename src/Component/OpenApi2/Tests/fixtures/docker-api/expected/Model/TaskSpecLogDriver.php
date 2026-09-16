<?php

namespace Docker\Api\Model;

class TaskSpecLogDriver
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var iterable<string, string>
     */
    public iterable $options;
}