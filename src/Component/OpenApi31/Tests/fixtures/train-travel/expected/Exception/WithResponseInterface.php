<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}