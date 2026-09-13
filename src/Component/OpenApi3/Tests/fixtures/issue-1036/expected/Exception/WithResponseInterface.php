<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}