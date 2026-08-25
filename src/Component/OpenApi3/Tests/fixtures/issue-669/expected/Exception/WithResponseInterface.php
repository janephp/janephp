<?php

namespace Jane\Generated\DigitalOcean\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}