<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}