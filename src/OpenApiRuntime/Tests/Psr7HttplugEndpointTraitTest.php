<?php

namespace Jane\OpenApiRuntime\Tests;

use Jane\OpenApiRuntime\Tests\Fakes\EndpointFake;
use Jane\OpenApiRuntime\Tests\Fakes\Response;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Serializer;

class Psr7HttplugEndpointTraitTest extends TestCase
{
    public function testCanParseBody()
    {
        $endpoint = (new EndpointFake)->setContentType('application/json');

        $response = (new Response)->withStatus(200)
            ->setBody('Testing')
            ->withHeader('Content-Type', 'application/json');

        $result = $endpoint->parsePSR7Response($response, $this->makeSerializer());

        $this->assertEquals('Testing', $result);
    }

    /** @test */
    public function testCanHandleMissingContentTypeHeader()
    {
        $endpoint = (new EndpointFake)->setContentType('application/json');

        $response = (new Response)->withStatus(200)
            ->setBody('Testing');

        $result = $endpoint->parsePSR7Response($response, $this->makeSerializer());

        $this->assertNull($result);
    }

    private function makeSerializer(): Serializer
    {
        return new Serializer();
    }
}
