<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}