<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonTrafficClassRef
{
    /**
     * Identifier of the Traffic Class
     *
     * @var string
     */
    public string $id;
    /**
     * White list of the Traffic Class Profile. The multiple entries need to be separated by comma (,)
     *
     * @var string
     */
    public string $whitelists;
}