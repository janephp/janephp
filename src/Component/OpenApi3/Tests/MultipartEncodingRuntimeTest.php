<?php

namespace Jane\Component\OpenApi3\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Runtime test for generated multipart/form-data endpoint code with binary
 * properties and an encoding object.
 *
 * This test verifies that binary (type: string + format: binary) form
 * parameters are sent with a filename, that a Content-Type part header is
 * emitted when the media type declares one through the encoding object
 * (wildcard media types are ignored), and that plain scalar parameters keep
 * their bare Content-Disposition header.
 *
 * Addresses issue https://github.com/janephp/janephp/issues/1036
 */
class MultipartEncodingRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/issue-1036';

    /**
     * Widens literal class references so analysis cannot bind to classes
     * generated from fixtures.
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    public static function setUpBeforeClass(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/expected';

        require_once $expectedDir . '/Runtime/AdditionalPropertiesInterface.php';
        require_once $expectedDir . '/Runtime/AdditionalAndPatternProperties.php';
        require_once $expectedDir . '/Model/DocumentUpload.php';
        require_once $expectedDir . '/Runtime/Normalizer/CheckArray.php';
        require_once $expectedDir . '/Runtime/Normalizer/ValidatorTrait.php';
        require_once $expectedDir . '/Normalizer/DocumentUploadNormalizer.php';
        require_once $expectedDir . '/Normalizer/JaneObjectNormalizer.php';
        require_once $expectedDir . '/Runtime/Client/Endpoint.php';
        require_once $expectedDir . '/Runtime/Client/BaseEndpoint.php';
        require_once $expectedDir . '/Runtime/Client/EndpointTrait.php';
        require_once $expectedDir . '/Endpoint/UploadDocument.php';
    }

    public function testMultipartPartsCarryFilenameAndDeclaredContentType(): void
    {
        $serializer = $this->createSerializer();

        /** @var class-string */
        $modelClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Model\DocumentUpload');
        /** @var class-string */
        $endpointClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Endpoint\UploadDocument');

        $body = new $modelClass();
        $body->file = 'pdf-file-content';
        $body->preview = 'preview-file-content';
        $body->note = 'a note';

        $result = (new $endpointClass($body))->getBody($serializer);

        $this->assertIsArray($result);
        $this->assertCount(2, $result);
        $this->assertArrayHasKey('Content-Type', $result[0]);
        $this->assertStringContainsString('multipart/form-data', $result[0]['Content-Type'][0]);

        $streamContent = (string) $result[1];

        // older multipart-stream-builder versions add extra part headers (e.g. Content-Length),
        // so patterns bridging header block and part body use a lenient .*?\R\R
        // binary property with encoding contentType: filename and Content-Type part header
        $this->assertMatchesRegularExpression('/Content-Type: application\/pdf\R.*?name="file"; filename="file"\R/s', $streamContent);
        $this->assertMatchesRegularExpression('/name="file".*?\R\Rpdf-file-content\R/s', $streamContent);

        // binary property with a wildcard encoding contentType: filename only
        $this->assertMatchesRegularExpression('/name="preview"; filename="preview"\R/', $streamContent);
        $this->assertMatchesRegularExpression('/name="preview".*?\R\Rpreview-file-content\R/s', $streamContent);
        $this->assertDoesNotMatchRegularExpression('/Content-Type: image/', $streamContent);

        // plain scalar property: bare Content-Disposition, no filename
        $this->assertMatchesRegularExpression('/name="note"\R/', $streamContent);
        $this->assertMatchesRegularExpression('/name="note".*?\R\Ra note\R/s', $streamContent);
    }

    public function testDefaultFilenameYieldsToRealFileStreams(): void
    {
        $serializer = $this->createSerializer();

        $realFile = sys_get_temp_dir() . '/jane-issue-1036-upload.pdf';
        file_put_contents($realFile, 'real-file-content');

        /** @var class-string */
        $modelClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Model\DocumentUpload');
        /** @var class-string */
        $endpointClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Endpoint\UploadDocument');

        try {
            // a resource backed by a real file keeps its derived filename (and extension based Content-Type guessing stays possible)
            $body = new $modelClass();
            $body->file = fopen($realFile, 'r');
            $result = (new $endpointClass($body))->getBody($serializer);
            $streamContent = (string) $result[1];
            $this->assertMatchesRegularExpression('/name="file"; filename="jane-issue-1036-upload.pdf"\R/', $streamContent);

            // an in-memory resource has no derivable filename: the property name fallback applies
            $inMemory = fopen('php://temp', 'rb+');
            fwrite($inMemory, 'in-memory-content');
            rewind($inMemory);
            $body = new $modelClass();
            $body->file = $inMemory;
            $result = (new $endpointClass($body))->getBody($serializer);
            $streamContent = (string) $result[1];
            $this->assertMatchesRegularExpression('/name="file"; filename="file"\R/', $streamContent);
        } finally {
            @unlink($realFile);
        }
    }

    private function createSerializer(): \Symfony\Component\Serializer\Serializer
    {
        /** @var class-string */
        $normalizerClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Normalizer\JaneObjectNormalizer');

        $normalizers = [
            new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
            new $normalizerClass(),
        ];
        $encoders = [
            new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])
            ),
        ];

        return new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    }
}
