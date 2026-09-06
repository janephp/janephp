<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Runtime\data\Client;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\ResponseInterface;

// The real, namespace-less runtime templates are exercised directly: they are
// the exact files copied into generated clients.
if (!interface_exists('Endpoint', false) || !class_exists('Client', false)) {
    $runtimeTemplateDir = __DIR__ . '/../../../../../Generator/Runtime/Client';

    if (!interface_exists('Endpoint', false)) {
        require_once $runtimeTemplateDir . '/Endpoint.php';
    }

    if (!class_exists('Client', false)) {
        require_once $runtimeTemplateDir . '/Client.php';
    }
}

final class ClientTest extends TestCase
{
    /**
     * stream() accepts a single response as well as a batch. A single
     * response must be streamed as itself, not iterated as an object.
     */
    public function testStreamingASingleResponseDrivesIt(): void
    {
        $httpClient = new MockHttpClient([new MockResponse('payload')]);
        $client = $this->client($httpClient);
        $response = $httpClient->request('GET', 'https://example.test/one');

        self::assertSame([$response], $this->streamedResponses($client->stream($response)));
    }

    public function testStreamingABatchDrivesEveryResponse(): void
    {
        $httpClient = new MockHttpClient([new MockResponse('one'), new MockResponse('two')]);
        $client = $this->client($httpClient);
        $first = $httpClient->request('GET', 'https://example.test/one');
        $second = $httpClient->request('GET', 'https://example.test/two');

        self::assertSame([$first, $second], $this->streamedResponses($client->stream([$first, $second])));
    }

    private function client(MockHttpClient $httpClient): \Client
    {
        return new class($httpClient, new Serializer()) extends \Client {
        };
    }

    /**
     * The responses that reached their last chunk, in stream order.
     *
     * @return list<ResponseInterface>
     */
    private function streamedResponses(iterable $stream): array
    {
        $completed = [];

        foreach ($stream as $response => $chunk) {
            if ($chunk->isLast()) {
                $completed[] = $response;
            }
        }

        return $completed;
    }
}
