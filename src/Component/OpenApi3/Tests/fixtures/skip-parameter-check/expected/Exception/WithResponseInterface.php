<?php

namespace Jane\OpenApi3\Tests\Expected\SkipParameterCheck\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}