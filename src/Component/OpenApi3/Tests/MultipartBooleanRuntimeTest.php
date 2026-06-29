<?php

namespace Jane\Component\OpenApi3\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Runtime test for generated multipart/form-data endpoint code.
 *
 * This test verifies that boolean form parameters are serialized as
 * "true"/"false" strings in multipart payloads.
 */
class MultipartBooleanRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/multipart-boolean-runtime';

    public function testMultipartBooleanValuesAreEncodedAsStringLiterals(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/expected';

        require_once $expectedDir . '/Model/FilePostBody.php';
        require_once $expectedDir . '/Normalizer/FilePostBodyNormalizer.php';
        require_once $expectedDir . '/Normalizer/JaneObjectNormalizer.php';
        require_once $expectedDir . '/Validator/FilePostBodyConstraint.php';
        require_once $expectedDir . '/Endpoint/PostFile.php';

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

        $trueBody = new Expected\Model\FilePostBody();
        $trueBody->setFichier('file-content');
        $trueBody->setValid(true);
        $trueResult = (new Expected\Endpoint\PostFile($trueBody))->getBody($serializer, $streamFactory);
        $trueStreamContent = (string) $trueResult[1];
        $this->assertMatchesRegularExpression('/name="valid".*?\R\Rtrue\R/s', $trueStreamContent);

        $falseBody = new Expected\Model\FilePostBody();
        $falseBody->setFichier('file-content');
        $falseBody->setValid(false);
        $falseResult = (new Expected\Endpoint\PostFile($falseBody))->getBody($serializer, $streamFactory);
        $falseStreamContent = (string) $falseResult[1];
        $this->assertMatchesRegularExpression('/name="valid".*?\R\Rfalse\R/s', $falseStreamContent);
    }
}
