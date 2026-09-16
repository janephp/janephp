<?php

namespace Docker\Api\Model;

class GraphDriverData
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var iterable<string, string>
     */
    public iterable $data;
}