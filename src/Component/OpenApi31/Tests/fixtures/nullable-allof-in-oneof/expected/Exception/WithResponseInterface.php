<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}