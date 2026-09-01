<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client;

/**
 * Minimal multipart/form-data body builder, replacing the PSR-7 based
 * php-http/multipart-stream-builder: builds the raw body string.
 *
 * Part semantics are kept compatible with it:
 * - a string value is the part content;
 * - a resource value is streamed, and its real file name (from the stream
 *   metadata) is used as the part filename when none is provided;
 * - a filename (explicit option or derived) adds a Content-Disposition part
 *   header and a Content-Type guessed from the file extension, unless the
 *   part already declares them.
 */
final class MultipartStreamBuilder
{
    /**
     * Subset of Apache's mime.types (http://svn.apache.org/repos/asf/httpd/httpd/branches/1.3.x/conf/mime.types),
     * matching the ApacheMimetypeHelper used by the previous php-http implementation.
     */
    private const MIMETYPES = [
        '7z' => 'application/x-7z-compressed',
        'aac' => 'audio/x-aac',
        'ai' => 'application/postscript',
        'aif' => 'audio/x-aiff',
        'asc' => 'text/plain',
        'asf' => 'video/x-ms-asf',
        'atom' => 'application/atom+xml',
        'avi' => 'video/x-msvideo',
        'bmp' => 'image/bmp',
        'bz2' => 'application/x-bzip2',
        'cer' => 'application/pkix-cert',
        'crl' => 'application/pkix-crl',
        'crt' => 'application/x-x509-ca-cert',
        'css' => 'text/css',
        'csv' => 'text/csv',
        'cu' => 'application/cu-seeme',
        'deb' => 'application/x-debian-package',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'dvi' => 'application/x-dvi',
        'eot' => 'application/vnd.ms-fontobject',
        'eps' => 'application/postscript',
        'epub' => 'application/epub+zip',
        'etx' => 'text/x-setext',
        'flac' => 'audio/flac',
        'flv' => 'video/x-flv',
        'gif' => 'image/gif',
        'gz' => 'application/gzip',
        'htm' => 'text/html',
        'html' => 'text/html',
        'ico' => 'image/x-icon',
        'ics' => 'text/calendar',
        'ini' => 'text/plain',
        'iso' => 'application/x-iso9660-image',
        'jar' => 'application/java-archive',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'js' => 'text/javascript',
        'json' => 'application/json',
        'latex' => 'application/x-latex',
        'log' => 'text/plain',
        'm4a' => 'audio/mp4',
        'm4v' => 'video/mp4',
        'mid' => 'audio/midi',
        'midi' => 'audio/midi',
        'mov' => 'video/quicktime',
        'mp3' => 'audio/mpeg',
        'mp4' => 'video/mp4',
        'mp4a' => 'audio/mp4',
        'mp4v' => 'video/mp4',
        'mpe' => 'video/mpeg',
        'mpeg' => 'video/mpeg',
        'mpg' => 'video/mpeg',
        'mpg4' => 'video/mp4',
        'oga' => 'audio/ogg',
        'ogg' => 'audio/ogg',
        'ogv' => 'video/ogg',
        'ogx' => 'application/ogg',
        'pbm' => 'image/x-portable-bitmap',
        'pdf' => 'application/pdf',
        'pgm' => 'image/x-portable-graymap',
        'png' => 'image/png',
        'pnm' => 'image/x-portable-anymap',
        'ppm' => 'image/x-portable-pixmap',
        'ppt' => 'application/vnd.ms-powerpoint',
        'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'ps' => 'application/postscript',
        'qt' => 'video/quicktime',
        'rar' => 'application/x-rar-compressed',
        'ras' => 'image/x-cmu-raster',
        'rss' => 'application/rss+xml',
        'rtf' => 'application/rtf',
        'sgm' => 'text/sgml',
        'sgml' => 'text/sgml',
        'svg' => 'image/svg+xml',
        'swf' => 'application/x-shockwave-flash',
        'tar' => 'application/x-tar',
        'tif' => 'image/tiff',
        'tiff' => 'image/tiff',
        'torrent' => 'application/x-bittorrent',
        'ttf' => 'application/x-font-ttf',
        'txt' => 'text/plain',
        'wav' => 'audio/x-wav',
        'webp' => 'image/webp',
        'webm' => 'video/webm',
        'wma' => 'audio/x-ms-wma',
        'wmv' => 'video/x-ms-wmv',
        'woff' => 'application/x-font-woff',
        'wsdl' => 'application/wsdl+xml',
        'xbm' => 'image/x-xbitmap',
        'xls' => 'application/vnd.ms-excel',
        'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'xml' => 'application/xml',
        'xpm' => 'image/x-xpixmap',
        'xwd' => 'image/x-xwindowdump',
        'yaml' => 'text/yaml',
        'yml' => 'text/yaml',
        'zip' => 'application/zip',
        'pkpass' => 'application/vnd.apple.pkpass',
        'msg' => 'application/vnd.ms-outlook',
    ];

    private ?string $boundary = null;

    /**
     * @var list<array{contents: string, headers: array<string, string>}>
     */
    private array $parts = [];

    public function setBoundary(string $boundary): static
    {
        $this->boundary = $boundary;

        return $this;
    }

    public function getBoundary(): string
    {
        return $this->boundary ??= uniqid('', true);
    }

    /**
     * Add a part to the multipart body.
     *
     * @param string                                                    $name     the form field name
     * @param string|resource                                           $resource the part content
     * @param array{headers?: array<string, string>, filename?: string} $options
     *
     * Options:
     * - headers: additional part headers as hashmap ['header-name' => 'header-value']
     * - filename: part filename; when absent, it is derived from the stream
     *   metadata of resource values (except php:// and data:// streams)
     */
    public function addResource(string $name, mixed $resource, array $options = []): static
    {
        $headers = $options['headers'] ?? [];
        $contents = null;
        $uri = null;

        if (\is_resource($resource)) {
            $metadata = stream_get_meta_data($resource);
            $uri = \is_string($metadata['uri'] ?? null) ? $metadata['uri'] : null;

            if (true === ($metadata['seekable'] ?? false)) {
                rewind($resource);
            }

            $contents = stream_get_contents($resource);

            if (false === $contents) {
                throw new \InvalidArgumentException(sprintf('Could not read the stream provided for part "%s".', $name));
            }

            if (empty($options['filename']) && null !== $uri && 'php://' !== substr($uri, 0, 6) && 'data://' !== substr($uri, 0, 7)) {
                $options['filename'] = $uri;
            }
        } elseif (\is_string($resource)) {
            $contents = $resource;
        } else {
            throw new \InvalidArgumentException(sprintf('Value for part "%s" must be a string or a resource, "%s" given.', $name, get_debug_type($resource)));
        }

        $filename = $options['filename'] ?? null;
        $hasFilename = '0' === $filename || $filename;

        if (!$this->hasHeader($headers, 'content-disposition')) {
            $headers['Content-Disposition'] = sprintf('form-data; name="%s"', $name);

            if ($hasFilename) {
                $headers['Content-Disposition'] .= sprintf('; filename="%s"', $this->basename($filename));
            }
        }

        if (!$this->hasHeader($headers, 'content-type') && $hasFilename) {
            $mimetype = $this->getMimetypeFromFilename($filename);

            if (null !== $mimetype) {
                $headers['Content-Type'] = $mimetype;
            }
        }

        $this->parts[] = ['contents' => $contents, 'headers' => $headers];

        return $this;
    }

    /**
     * Build the raw multipart/form-data body.
     */
    public function build(): string
    {
        $body = '';

        foreach ($this->parts as $part) {
            $body .= sprintf("--%s\r\n", $this->getBoundary());

            foreach ($part['headers'] as $name => $value) {
                $body .= sprintf("%s: %s\r\n", $name, $value);
            }

            $body .= "\r\n" . $part['contents'] . "\r\n";
        }

        return $body . sprintf("--%s--\r\n", $this->getBoundary());
    }

    private function hasHeader(array $headers, string $key): bool
    {
        $lowercaseHeader = strtolower($key);

        foreach ($headers as $name => $value) {
            if (strtolower((string) $name) === $lowercaseHeader) {
                return true;
            }
        }

        return false;
    }

    private function getMimetypeFromFilename(string $filename): ?string
    {
        $extension = strtolower(pathinfo($filename, \PATHINFO_EXTENSION));

        return self::MIMETYPES[$extension] ?? null;
    }

    /**
     * Gets the filename from a given path.
     *
     * PHP's basename() does not properly support streams or filenames beginning
     * with a non-US-ASCII character.
     */
    private function basename(string $path): string
    {
        $separators = '/';

        if (\DIRECTORY_SEPARATOR !== '/') {
            $separators .= \DIRECTORY_SEPARATOR;
        }

        $path = rtrim($path, $separators);

        return preg_match('@[^' . preg_quote($separators, '@') . ']+$@', $path, $matches) ? $matches[0] : '';
    }
}
