<?php

namespace Jane\Component\JsonSchema\Tests\Expected\NameConflict\Model;

class Test
{
    /**
     * Indicates the ID of the referenced original mail.
     *
     * @var string
     */
    public string $msgref;
    /**
     * Message reference on reply/forward.
     *
     * @var string
     */
    public string $msgRef2;
}