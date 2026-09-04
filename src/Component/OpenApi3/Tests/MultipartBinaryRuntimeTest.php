<?php

namespace Jane\Component\OpenApi3\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Runtime test for generated multipart/form-data endpoint code with binary
 * string properties.
 *
 * This test verifies that binary (type: string + format: binary) form
 * parameters can be provided as a plain string or a stream resource, and that
 * their raw content ends up in the multipart payload.
 *
 * Addresses issue https://github.com/janephp/janephp/issues/793
 */
class MultipartBinaryRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/issue-793';

    public function testMultipartBinaryValuesArePassedRaw(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/expected';

        require_once $expectedDir . '/Model/FilePostBody.php';
        require_once $expectedDir . '/Runtime/Normalizer/CheckArray.php';
        require_once $expectedDir . '/Runtime/Normalizer/ValidatorTrait.php';
        require_once $expectedDir . '/Normalizer/FilePostBodyNormalizer.php';
        require_once $expectedDir . '/Normalizer/JaneObjectNormalizer.php';
        require_once $expectedDir . '/Validator/FilePostBodyConstraint.php';
        require_once $expectedDir . '/Runtime/Client/Endpoint.php';
        require_once $expectedDir . '/Runtime/Client/BaseEndpoint.php';
        require_once $expectedDir . '/Runtime/Client/EndpointTrait.php';
        require_once $expectedDir . '/Endpoint/UploadFile.php';

        $normalizers = [
            new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
            new ExpectedIssue793\Normalizer\JaneObjectNormalizer(),
        ];
        $encoders = [
            new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])
            ),
        ];
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);

        // Stream resource
        $resource = fopen('php://temp', 'rb+');
        fwrite($resource, 'resource-file-content');
        rewind($resource);
        $body = new ExpectedIssue793\Model\FilePostBody();
        $body->file = $resource;
        $result = (new ExpectedIssue793\Endpoint\UploadFile($body))->getBody($serializer);
        $streamContent = (string) $result[1];
        $this->assertMatchesRegularExpression('/name="file".*?\R\Rresource-file-content\R/s', $streamContent);

        // Plain string still works
        $body = new ExpectedIssue793\Model\FilePostBody();
        $body->file = 'string-file-content';
        $result = (new ExpectedIssue793\Endpoint\UploadFile($body))->getBody($serializer);
        $streamContent = (string) $result[1];
        $this->assertMatchesRegularExpression('/name="file".*?\R\Rstring-file-content\R/s', $streamContent);
    }
}
