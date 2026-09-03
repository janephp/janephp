<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\Client;

use Symfony\Component\Serializer\SerializerInterface;
final class JsonPayload
{
    /**
     * Encodes an object-shaped payload for a JSON request body.
     *
     * Only called for bodies resolving to a generated model class: a
     * normalized empty PHP array must go on the wire as a JSON object ('{}'),
     * not as an empty JSON array ('[]').
     */
    public static function encode(SerializerInterface $serializer, mixed $body): string
    {
        $serialized = $serializer->serialize($body, 'json');
        if ('[]' === $serialized) {
            return '{}';
        }
        return $serialized;
    }
}