<?php

namespace Jane\Component\JsonSchemaRuntime\Tests;

use Jane\Component\JsonSchema\Tests\LocalSchemaServer;
use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;
use Jane\Component\JsonSchemaRuntime\Exception\ReferenceResolveException;
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
        // Served by the loopback schema server: redirects are not followed
        // anymore, so the reference must point at a directly reachable host.
        $ref = new Reference(LocalSchemaServer::url(__DIR__ . '/schema.json'), __DIR__ . '/schema.json');

        $result = $ref->resolve();

        self::assertIsArray($result);
    }

    public function testExternalRefBlockedByHostAllowlist(): void
    {
        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['example.com']);
        $ref = new Reference(LocalSchemaServer::url(__DIR__ . '/schema.json'), __DIR__ . '/schema.json');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('not allowed');
        $ref->resolve();
    }

    public function testExternalRefAllowedByHostAllowlist(): void
    {
        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['127.0.0.1']);
        $ref = new Reference(LocalSchemaServer::url(__DIR__ . '/schema.json'), __DIR__ . '/schema.json');

        $result = $ref->resolve();

        self::assertIsArray($result);
    }

    public function testExternalRefSubdomainMatchesHostAllowlistValidationPasses(): void
    {
        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['example.com']);
        // Nothing needs to be reachable at sub.example.com: the point is that
        // the host allowlist check passes for a subdomain of an allowed host,
        // so the fetch proceeds (and may fail later for network reasons).
        $ref = new Reference('https://sub.example.com/schema.json', __DIR__ . '/schema.json');

        try {
            $ref->resolve();
        } catch (\RuntimeException $e) {
            self::assertStringNotContainsString('not allowed', $e->getMessage());
        } catch (\Exception $e) {
            // Non-RuntimeException means validation passed (parsing error, DNS error, etc.)
            self::assertNotInstanceOf(\RuntimeException::class, $e);
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

    public function testValidJsonArrayRootIsResolvedAsJson(): void
    {
        // An empty array root is falsy: it must not be misrouted through the
        // YAML parser by the old falsy-check based decode logic.
        $ref = new Reference('#', __DIR__ . '/array-root.json');

        self::assertSame([], $ref->resolve());
    }

    public function testValidJsonScalarRootIsResolvedAsJson(): void
    {
        $ref = new Reference('#', __DIR__ . '/scalar-root.json');

        self::assertSame(0, $ref->resolve());
    }

    public function testUnparsableContentThrowsReferenceResolveException(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            // Unclosed YAML flow collection: neither valid JSON nor valid YAML.
            file_put_contents($treeRoot . '/base/garbage.json', '{foo: [1, 2');
            $ref = new Reference('garbage.json', $treeRoot . '/base/schema.json');

            try {
                $ref->resolve();
                self::fail('Expected ReferenceResolveException to be thrown');
            } catch (ReferenceResolveException $exception) {
                self::assertStringContainsString('neither valid JSON nor valid YAML', $exception->getMessage());
                // BC: the exception must stay catchable as a RuntimeException.
                self::assertInstanceOf(\RuntimeException::class, $exception);
                // ADR 0002: user-facing errors join the Jane error taxonomy so
                // generation commands render them cleanly.
                self::assertInstanceOf(JaneExceptionInterface::class, $exception);
            }
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testUnreadableDocumentThrowsReferenceResolveException(): void
    {
        $treeRoot = $this->createTempTree();

        try {
            $ref = new Reference('missing.json', $treeRoot . '/base/schema.json');

            $this->expectException(ReferenceResolveException::class);
            $this->expectExceptionMessage('Unable to fetch reference document');
            $ref->resolve();
        } finally {
            $this->removeDirectory($treeRoot);
        }
    }

    public function testRemoteRedirectIsNotFollowed(): void
    {
        $server = stream_socket_server('tcp://127.0.0.1:0', $errno, $errstr);

        if (false === $server) {
            $this->markTestSkipped(\sprintf('Cannot bind a loopback socket: %s', $errstr));
        }

        $name = (string) stream_socket_get_name($server, false);
        $port = (int) substr($name, strrpos($name, ':') + 1);
        $repositoryRoot = \dirname(__DIR__, 4);

        // The resolution runs in a child process: the loopback server must be
        // able to answer while the fetch is in flight. The 302 points to a
        // closed port, so if the redirect were followed the fetch would fail
        // with "Unable to fetch" instead of reporting the redirect.
        $childCode = <<<'PHP'
require $argv[1];
Jane\Component\JsonSchemaRuntime\Reference::allowExternalRefs(true);
Jane\Component\JsonSchemaRuntime\Reference::setAllowedExternalHosts(['127.0.0.1']);
try {
    (new Jane\Component\JsonSchemaRuntime\Reference($argv[2], $argv[3]))->resolve();
    echo 'NO_EXCEPTION';
} catch (Throwable $e) {
    echo get_class($e) . ': ' . $e->getMessage();
}
PHP;

        $spec = [1 => ['pipe', 'w'], 2 => ['pipe', 'w']];
        $process = proc_open([\PHP_BINARY, '-r', $childCode, '--', $repositoryRoot . '/vendor/autoload.php', \sprintf('http://127.0.0.1:%d/doc.json', $port), __DIR__ . '/schema.json'], $spec, $pipes);

        if (!\is_resource($process)) {
            fclose($server);
            $this->markTestSkipped('Cannot spawn a child PHP process.');
        }

        stream_set_blocking($server, false);

        $client = false;
        $deadline = microtime(true) + 5;

        while (microtime(true) < $deadline) {
            $client = @stream_socket_accept($server, 0);

            if (false !== $client) {
                break;
            }

            usleep(10_000);
        }

        if (false === $client) {
            proc_terminate($process);
            proc_close($process);
            fclose($server);
            $this->fail('The reference fetch never connected to the loopback server.');
        }

        stream_set_timeout($client, 2);
        fread($client, 4096);
        fwrite($client, "HTTP/1.1 302 Found\r\nLocation: http://127.0.0.1:9/redirected\r\nContent-Length: 0\r\nConnection: close\r\n\r\n");
        fclose($client);
        fclose($server);

        $output = (string) stream_get_contents($pipes[1]);
        $errorOutput = (string) stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($process);

        self::assertStringContainsString(ReferenceResolveException::class, $output, 'Child output: ' . $output . $errorOutput);
        self::assertStringContainsString('redirects are not followed', $output, 'Child output: ' . $output . $errorOutput);
    }

    public function testRemoteFetchFailureThrowsReferenceResolveException(): void
    {
        // Bind then release a port: nothing listens there anymore, the fetch
        // must fail with a clear error instead of a TypeError.
        $server = stream_socket_server('tcp://127.0.0.1:0', $errno, $errstr);

        if (false === $server) {
            $this->markTestSkipped(\sprintf('Cannot bind a loopback socket: %s', $errstr));
        }

        $name = (string) stream_socket_get_name($server, false);
        $port = (int) substr($name, strrpos($name, ':') + 1);
        fclose($server);

        Reference::allowExternalRefs(true);
        Reference::setAllowedExternalHosts(['127.0.0.1']);
        $ref = new Reference(\sprintf('http://127.0.0.1:%d/doc.json', $port), __DIR__ . '/schema.json');

        $this->expectException(ReferenceResolveException::class);
        $this->expectExceptionMessage('Unable to fetch reference document');
        $ref->resolve();
    }

    public function testRootOriginPathDoesNotBypassContainment(): void
    {
        // An empty / root origin path used to skip local containment entirely;
        // it must now run the containment logic (degenerating to an empty base
        // directory, which authorizes absolute paths).
        try {
            $result = (new Reference(__DIR__ . '/schema.json', '/'))->resolve();

            self::assertIsArray($result);
        } catch (\RuntimeException $exception) {
            self::assertStringNotContainsString('outside the allowed directories', $exception->getMessage());
        }
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
