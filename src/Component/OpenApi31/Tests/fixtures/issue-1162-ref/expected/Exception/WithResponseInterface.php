<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1162Ref\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}