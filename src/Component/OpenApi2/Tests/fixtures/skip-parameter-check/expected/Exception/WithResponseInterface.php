<?php

namespace Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}