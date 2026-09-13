<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}