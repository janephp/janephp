<?php

namespace Jane\OpenApiRuntime\Client;

use Http\Client\Common\FlexibleHttpClient;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Resource
{
    public const FETCH_RESPONSE = 'response';
    public const FETCH_OBJECT = 'object';
}
