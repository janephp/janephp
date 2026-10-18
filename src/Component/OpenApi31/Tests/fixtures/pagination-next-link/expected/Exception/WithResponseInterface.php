<?php

namespace Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}