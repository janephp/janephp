<?php

namespace Jane\Component\JsonSchema\Tests;

/**
 * Serves the repository directory over a throwaway PHP built-in HTTP server,
 * so fixtures referencing their spec "from URL" exercise real HTTP fetching
 * without depending on external hosts (which made CI flaky).
 *
 * The server only binds to a loopback interface and is terminated when the
 * PHP process ends.
 */
final class LocalSchemaServer
{
    private const HOST = '127.0.0.1';
    private const FIRST_PORT = 4012;
    private const LAST_PORT = 4021;
    private const STARTUP_TIMEOUT_SECONDS = 3;

    private static int $port = 0;

    /**
     * @var array<int, resource>
     */
    private static array $processes = [];

    public static function url(string $filePath): string
    {
        $documentRoot = self::documentRoot();
        $realPath = realpath($filePath);

        if (false === $realPath) {
            throw new \InvalidArgumentException(\sprintf('File "%s" does not exist.', $filePath));
        }

        $relativePath = self::relativePath($realPath, $documentRoot);
        self::ensureServer($relativePath);

        return \sprintf('http://%s:%d/%s', self::HOST, self::$port, $relativePath);
    }

    private static function documentRoot(): string
    {
        // __DIR__ is "<repository root>/src/Component/JsonSchema/Tests".
        return \dirname(__DIR__, 4);
    }

    private static function relativePath(string $filePath, string $documentRoot): string
    {
        $normalizedFile = rtrim(str_replace('\\', '/', $filePath), '/');
        $normalizedRoot = rtrim(str_replace('\\', '/', $documentRoot), '/') . '/';

        if (!str_starts_with($normalizedFile, $normalizedRoot)) {
            throw new \InvalidArgumentException(\sprintf('File "%s" is not inside the local schema server document root "%s".', $filePath, $documentRoot));
        }

        return substr($normalizedFile, \strlen($normalizedRoot));
    }

    /**
     * Reuses a server already answering with the probed document (leftover
     * instance or parallel test process), otherwise spawns a fresh one on the
     * first usable port of the allowed range.
     */
    private static function ensureServer(string $probePath): void
    {
        if ([] !== self::$processes) {
            return;
        }

        for ($port = self::FIRST_PORT; $port <= self::LAST_PORT; ++$port) {
            if (false !== self::fetch($port, $probePath)) {
                self::$port = $port;

                return;
            }

            if (self::isPortInUse($port)) {
                continue;
            }

            if (null !== ($process = self::spawnServer($port, $probePath))) {
                self::$processes[] = $process;
                self::$port = $port;

                return;
            }
        }

        throw new \RuntimeException(\sprintf('Could not start the local schema HTTP server on ports %d to %d.', self::FIRST_PORT, self::LAST_PORT));
    }

    /**
     * @return resource|null
     */
    private static function spawnServer(int $port, string $probePath)
    {
        $scratchFile = (string) tempnam(sys_get_temp_dir(), 'jane-schema-server-');
        $process = proc_open(
            [\PHP_BINARY, '-S', self::HOST . ':' . $port, '-t', self::documentRoot()],
            [
                0 => ['file', $scratchFile, 'r'],
                1 => ['file', $scratchFile, 'a'],
                2 => ['file', $scratchFile, 'a'],
            ],
            $pipes
        );

        if (!\is_resource($process)) {
            return null;
        }

        foreach ($pipes as $pipe) {
            fclose($pipe);
        }

        register_shutdown_function(static function () use ($process): void {
            proc_terminate($process);
            proc_close($process);
        });

        // Wait until the built-in server accepts connections and serves documents.
        $deadline = microtime(true) + self::STARTUP_TIMEOUT_SECONDS;

        do {
            usleep(50_000);

            $status = proc_get_status($process);

            if (!$status['running']) {
                proc_close($process);

                return null;
            }

            if (false !== self::fetch($port, $probePath)) {
                return $process;
            }
        } while (microtime(true) < $deadline);

        proc_terminate($process);
        proc_close($process);

        return null;
    }

    private static function isPortInUse(int $port): bool
    {
        $socket = @fsockopen(self::HOST, $port, $errno, $errstr, 0.2);

        if (false === $socket) {
            return false;
        }

        fclose($socket);

        return true;
    }

    /**
     * @return string|false
     */
    private static function fetch(int $port, string $path)
    {
        $context = stream_context_create(['http' => ['timeout' => 1]]);

        return @file_get_contents(\sprintf('http://%s:%d/%s', self::HOST, $port, $path), false, $context);
    }
}
