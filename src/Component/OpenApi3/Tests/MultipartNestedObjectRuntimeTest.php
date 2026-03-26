<?php

namespace Jane\Component\OpenApi3\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Runtime test for generated multipart/form-data endpoint code.
 *
 * This test verifies that the generated getBody() method correctly handles
 * non-scalar form parameters (nested objects, booleans, etc.) without throwing
 * InvalidArgumentException from MultipartStreamBuilder::createStream().
 *
 * Addresses issue https://github.com/janephp/janephp/issues/738
 */
class MultipartNestedObjectRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/multipart-nested-object';

    public function testMultipartNestedObject(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/expected';

        require_once $expectedDir . '/Model/FilePostBody.php';
        require_once $expectedDir . '/Model/FilePostBodyItem.php';
        require_once $expectedDir . '/Normalizer/FilePostBodyNormalizer.php';
        require_once $expectedDir . '/Normalizer/FilePostBodyItemNormalizer.php';
        require_once $expectedDir . '/Normalizer/JaneObjectNormalizer.php';
        require_once $expectedDir . '/Validator/FilePostBodyConstraint.php';
        require_once $expectedDir . '/Validator/FilePostBodyItemConstraint.php';
        require_once $expectedDir . '/Endpoint/PostFile.php';

        $item = new Expected\Model\FilePostBodyItem();
        $item->setItemId(42);
        $item->setItemType('document');

        $body = new Expected\Model\FilePostBody();
        $body->setFichier('file-content');
        if (method_exists($body, 'setItem')) {
            $body->setItem($item);
        }

        $normalizers = [
            new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
            new Expected\Normalizer\JaneObjectNormalizer(),
        ];
        $encoders = [
            new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])
            ),
        ];
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();

        $endpoint = new Expected\Endpoint\PostFile($body);
        $result = $endpoint->getBody($serializer, $streamFactory);

        $this->assertIsArray($result);
        $this->assertCount(2, $result);
        $this->assertArrayHasKey('Content-Type', $result[0]);
        $this->assertStringContainsString('multipart/form-data', $result[0]['Content-Type'][0]);
        $this->assertInstanceOf(\Psr\Http\Message\StreamInterface::class, $result[1]);

        $streamContent = (string) $result[1];
        $this->assertStringContainsString('file-content', $streamContent);
        $this->assertStringContainsString('{"itemId":42,"itemType":"document"}', $streamContent);
    }
}
