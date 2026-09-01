<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcSignaturePackageBinary
{
    /**
     * File name of the Signature Package Binary
     *
     * @var string
     */
    public string $fileName;
    /**
     * @var string
     */
    public string $platform;
    /**
     * @var string
     */
    public string $type;
    /**
     * The size of signature package binary file
     *
     * @var int
     */
    public int $size;
}