<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}