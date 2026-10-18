<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client;

/**
 * Helpers of the generated `*Paginated()` client methods following a next
 * page link: the RFC 8288 `Link: <…>; rel="next"` response header, or a full
 * next page URL read from the response body.
 */
final class Pagination
{
    /**
     * The target of the first `rel="next"` link of the Link response headers,
     * or null when the response has none (the last page).
     *
     * @param array<string, list<string>> $headers response headers, as returned by ResponseInterface::getHeaders(false)
     */
    public static function nextLinkFromHeaders(array $headers): ?string
    {
        foreach ($headers['link'] ?? [] as $header) {
            foreach (explode(',', $header) as $link) {
                $linkMatches = $relMatches = [];
                if (!preg_match('/^\s*<([^>]*)>(.*)$/s', $link, $linkMatches)) {
                    continue;
                }
                if (!preg_match('/;\s*rel\s*=\s*"?([^";]*)/i', $linkMatches[2], $relMatches)) {
                    continue;
                }
                $relations = preg_split('/\s+/', strtolower(trim($relMatches[1]))) ?: [];
                if (\in_array('next', $relations, true)) {
                    return $linkMatches[1];
                }
            }
        }
        return null;
    }
    /**
     * The query parameters of the next page call: the query string of the
     * next page link merged over the current query parameters.
     *
     * Only the query string of the link is followed: a link pointing at
     * another path than the paginated endpoint is rejected.
     *
     * @param array<string, mixed>  $queryParameters
     * @param array<string, string> $scalarTypes     declared int, float or bool query parameters: their
     *                                               string value in the link is cast to the declared type
     *
     * @return array<string, mixed>
     */
    public static function nextQueryParameters(string $nextLink, string $endpointUri, array $queryParameters, array $scalarTypes = []): array
    {
        $nextPath = parse_url($nextLink, \PHP_URL_PATH);
        $endpointPath = parse_url($endpointUri, \PHP_URL_PATH);
        if (\is_string($nextPath) && \is_string($endpointPath) && !str_ends_with(rtrim($nextPath, '/'), rtrim($endpointPath, '/'))) {
            throw new \UnexpectedValueException(sprintf('The next page link "%s" does not point at the paginated endpoint "%s": following it is not supported.', $nextLink, $endpointUri));
        }
        $nextQueryParameters = [];
        parse_str((string) parse_url($nextLink, \PHP_URL_QUERY), $nextQueryParameters);
        foreach ($nextQueryParameters as $name => $value) {
            if (\is_string($value) && isset($scalarTypes[$name])) {
                $nextQueryParameters[$name] = self::castScalar($value, $scalarTypes[$name]);
            }
        }
        return array_merge($queryParameters, $nextQueryParameters);
    }
    /**
     * A value which does not look like its declared type is kept as is: the
     * endpoint query options resolver then reports it.
     */
    private static function castScalar(string $value, string $type): string|int|float|bool
    {
        return match ($type) {
            'int' => preg_match('/^-?\d+$/', $value) ? (int) $value : $value,
            'float' => is_numeric($value) ? (float) $value : $value,
            'bool' => match (strtolower($value)) {
                'true', '1' => true,
                'false', '0' => false,
                default => $value,
            },
            default => $value,
        };
    }
}