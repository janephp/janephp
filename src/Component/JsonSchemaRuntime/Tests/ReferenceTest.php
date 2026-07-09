<?php

namespace Jane\Component\JsonSchemaRuntime\Tests;

use Jane\Component\JsonSchemaRuntime\Reference;
use PHPUnit\Framework\TestCase;

class ReferenceTest extends TestCase
{
    protected function setUp(): void
    {
        Reference::resetConfig();
    }

    /**
     * @dataProvider resolveProvider
     */
    public function testResolve($reference, $origin, $expected, $denormalizerCallback): void
    {
        $reference = new Reference($reference, $origin);

        self::assertEquals($expected, $reference->resolve($denormalizerCallback));
    }

    public function resolveProvider(): array
    {
        return [
            ['#', __DIR__ . '/schema.json', json_decode(file_get_contents(__DIR__ . '/schema.json'), true), null],
        ];
    }

    public function testExternalRefNotAllowedByDefault(): void
    {
        $ref = new Reference('http://json-schema.org/draft-04/schema#/id', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('External (HTTP/HTTPS) references are not allowed');
        $ref->resolve();
    }

    public function testExternalRefAllowed(): void
    {
        Reference::allowExternalRefs(true);
        $ref = new Reference('http://json-schema.org/draft-04/schema#/id', __DIR__ . '/schema.json');

        $result = $ref->resolve();

        self::assertEquals('http://json-schema.org/draft-04/schema#', $result);
    }

    public function testExternalRefBlockedByHostAllowlist(): void
    {
        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['example.com']);
        $ref = new Reference('http://json-schema.org/draft-04/schema#/id', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('not allowed');
        $ref->resolve();
    }

    public function testExternalRefAllowedByHostAllowlist(): void
    {
        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['json-schema.org']);
        $ref = new Reference('http://json-schema.org/draft-04/schema#/id', __DIR__ . '/schema.json');

        $result = $ref->resolve();

        self::assertEquals('http://json-schema.org/draft-04/schema#', $result);
    }

    public function testExternalRefSubdomainMatchesHostAllowlistValidationPasses(): void
    {
        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['example.com']);
        $ref = new Reference('https://sub.example.com/schema.json', __DIR__ . '/schema.json');

        try {
            $ref->resolve();
        } catch (\RuntimeException $e) {
            if (str_contains($e->getMessage(), 'not allowed')) {
                $this->fail('Subdomain should be allowed by parent domain entry: ' . $e->getMessage());
            }
            // Other RuntimeException (network, parsing) means validation passed
            $this->assertStringNotContainsString('not allowed', $e->getMessage());
        } catch (\Exception $e) {
            // Non-RuntimeException means validation passed (parsing error, DNS error, etc.)
            $this->assertTrue(true, 'Validation passed, got expected downstream error: ' . $e->getMessage());
        }
    }

    public function testFtpSchemeBlocked(): void
    {
        $ref = new Reference('ftp://example.com/schema.json', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('scheme "ftp" is not allowed');
        $ref->resolve();
    }

    public function testPhpStreamWrapperSchemeBlocked(): void
    {
        $ref = new Reference('php://filter/read=convert.base64-encode/resource=/etc/passwd', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('scheme "php" is not allowed');
        $ref->resolve();
    }

    public function testLocalPathTraversalBlocked(): void
    {
        $ref = new Reference(__DIR__ . '/../../../etc/passwd', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('outside the allowed directory');
        $ref->resolve();
    }

    public function testLocalAbsolutePathOutsideBaseBlocked(): void
    {
        $ref = new Reference('/etc/passwd', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('outside the allowed directory');
        $ref->resolve();
    }

    public function testLocalRefWithinSameDirectoryAllowed(): void
    {
        $ref = new Reference(__DIR__ . '/schema.json', __DIR__ . '/schema.json');

        $result = $ref->resolve();

        self::assertIsArray($result);
    }

    public function testInternalFragmentRefWithinSameDocumentAllowed(): void
    {
        $ref = new Reference('#', __DIR__ . '/schema.json');

        $result = $ref->resolve();

        self::assertIsArray($result);
    }
}
