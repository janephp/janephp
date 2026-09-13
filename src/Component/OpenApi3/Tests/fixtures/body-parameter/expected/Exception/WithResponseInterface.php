<?php

namespace Jane\Component\OpenApi3\Tests\Expected\BodyParameter\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}