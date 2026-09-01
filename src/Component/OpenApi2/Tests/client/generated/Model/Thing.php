<?php

namespace Jane\Component\OpenApi2\Tests\Client\Model;

class Thing
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $kind;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var list<string>
     */
    public array $tags;
}