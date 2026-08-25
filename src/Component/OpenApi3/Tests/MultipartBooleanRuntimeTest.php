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
    private const FIXTURE_DIR = __DIR__ . '/fixtures/multipart-boolean';

    public function testMultipartBooleanValuesAreEncodedAsStringLiterals(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/expected';

        require_once $expectedDir . '/Runtime/AdditionalAndPatternProperties.php';
        require_once $expectedDir . '/Runtime/AdditionalPropertiesInterface.php';
        require_once $expectedDir . '/Model/FileDepositPostBody.php';
        require_once $expectedDir . '/Runtime/Normalizer/CheckArray.php';
        require_once $expectedDir . '/Runtime/Normalizer/ValidatorTrait.php';
        require_once $expectedDir . '/Normalizer/FileDepositPostBodyNormalizer.php';
        require_once $expectedDir . '/Normalizer/JaneObjectNormalizer.php';
        require_once $expectedDir . '/Validator/FileDepositPostBodyConstraint.php';
        require_once $expectedDir . '/Runtime/Client/Endpoint.php';
        require_once $expectedDir . '/Runtime/Client/BaseEndpoint.php';
        require_once $expectedDir . '/Runtime/Client/EndpointTrait.php';
        require_once $expectedDir . '/Endpoint/PostFileDeposit.php';

        $normalizers = [
            new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
            new ExpectedMultiPartBoolean\Normalizer\JaneObjectNormalizer(),
        ];
        $encoders = [
            new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])
            ),
        ];
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();

        $trueBody = new ExpectedMultiPartBoolean\Model\FileDepositPostBody();
        $trueBody->setFichier('file-content');
        $trueBody->setValid(true);
        $trueResult = (new ExpectedMultiPartBoolean\Endpoint\PostFileDeposit($trueBody))->getBody($serializer, $streamFactory);
        $trueStreamContent = (string) $trueResult[1];
        $this->assertMatchesRegularExpression('/name="valid".*?\R\Rtrue\R/s', $trueStreamContent);

        $falseBody = new ExpectedMultiPartBoolean\Model\FileDepositPostBody();
        $falseBody->setFichier('file-content');
        $falseBody->setValid(false);
        $falseResult = (new ExpectedMultiPartBoolean\Endpoint\PostFileDeposit($falseBody))->getBody($serializer, $streamFactory);
        $falseStreamContent = (string) $falseResult[1];
        $this->assertMatchesRegularExpression('/name="valid".*?\R\Rfalse\R/s', $falseStreamContent);
    }
}
