<?php

namespace Docker\Api\Model;

class TaskSpecLogDriver
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var array<string, string>
     */
    public iterable $options;
}