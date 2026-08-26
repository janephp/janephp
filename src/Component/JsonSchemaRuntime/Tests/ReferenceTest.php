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
        $this->expectExceptionMessage('outside the allowed directories');
        $ref->resolve();
    }

    public function testLocalAbsolutePathOutsideBaseBlocked(): void
    {
        $ref = new Reference('/etc/passwd', __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('outside the allowed directories');
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

    public function testLocalSiblingDirectoryRefBlockedByDefault(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            $ref = new Reference('../sibling/other.json#/Foo', $treeRoot . '/base/schema.json');

            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('outside the allowed directories');
            $ref->resolve();
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testLocalSiblingDirectoryRefAllowedByConfiguredRoot(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            Reference::setAllowedLocalRefRoots([$treeRoot . '/sibling']);
            $ref = new Reference('../sibling/other.json#/Foo', $treeRoot . '/base/schema.json');

            $result = $ref->resolve();

            self::assertEquals(['type' => 'object'], $result);
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testLocalRefOutsideEveryConfiguredRootStillBlocked(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            Reference::setAllowedLocalRefRoots([$treeRoot . '/sibling']);
            $ref = new Reference('../elsewhere/outside.json#/Qux', $treeRoot . '/base/schema.json');

            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('outside the allowed directories');
            $ref->resolve();
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testConfiguredRootDoesNotAuthorizeSimilarDirectoryPrefix(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            // "…/base" must not authorize "…/base2": containment is checked on full path segments.
            Reference::setAllowedLocalRefRoots([$treeRoot . '/base']);
            $ref = new Reference('../base2/file.json#/Baz', $treeRoot . '/base/schema.json');

            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('outside the allowed directories');
            $ref->resolve();
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testSameDocumentRefsUnaffectedByConfiguredRoots(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            Reference::setAllowedLocalRefRoots([$treeRoot . '/sibling']);

            $sameDirectory = new Reference('schema.json', $treeRoot . '/base/schema.json');
            self::assertIsArray($sameDirectory->resolve());

            $fragment = new Reference('#/type', $treeRoot . '/base/schema.json');
            self::assertSame('object', $fragment->resolve());
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testResetConfigClearsAllowedLocalRefRoots(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            Reference::setAllowedLocalRefRoots([$treeRoot . '/sibling']);
            self::assertIsArray((new Reference('../sibling/other.json#/Foo', $treeRoot . '/base/schema.json'))->resolve());

            Reference::resetConfig();

            $blocked = new Reference('../sibling/other.json#/Foo', $treeRoot . '/base/schema.json');

            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('outside the allowed directories');
            $blocked->resolve();
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    private function createTempTree(): string
    {
        $root = sys_get_temp_dir() . '/jane-reference-test-' . bin2hex(random_bytes(8));

        foreach (['base', 'sibling', 'base2', 'elsewhere'] as $directory) {
            mkdir($root . '/' . $directory, 0777, true);
        }

        file_put_contents($root . '/base/schema.json', json_encode(['type' => 'object']));
        file_put_contents($root . '/sibling/other.json', json_encode(['Foo' => ['type' => 'object']]));
        file_put_contents($root . '/base2/file.json', json_encode(['Baz' => ['type' => 'object']]));
        file_put_contents($root . '/elsewhere/outside.json', json_encode(['Qux' => ['type' => 'object']]));

        return $root;
    }

    private function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        $entries = scandir($path);
        if (false === $entries) {
            return;
        }

        foreach ($entries as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            if (is_dir($entryPath)) {
                $this->removeDirectory($entryPath);
                continue;
            }

            unlink($entryPath);
        }

        rmdir($path);
    }
}
