<?php

namespace Jane\Component\OpenApi31\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\SecurityScheme;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SecuritySchemeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ($type === SecurityScheme::class || $type === EnrichedSecurityScheme::class)
            && \is_array($data)
            && !($context['jane_security_scheme_denormalizer_pass'] ?? false);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin'] ?? '');
        }

        $context['jane_security_scheme_denormalizer_pass'] = true;

        $object = new EnrichedSecurityScheme();

        if (!\is_array($data)) {
            return $object;
        }

        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('in', $data)) {
            $object->in = $data['in'];
        }
        if (\array_key_exists('scheme', $data)) {
            $object->scheme = $data['scheme'];
        }
        if (\array_key_exists('bearerFormat', $data)) {
            $object->bearerFormat = $data['bearerFormat'];
        }
        if (\array_key_exists('flows', $data)) {
            $object->flows = $data['flows'];
        }
        if (\array_key_exists('openIdConnectUrl', $data)) {
            $object->openIdConnectUrl = $data['openIdConnectUrl'];
        }

        return $object;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            SecurityScheme::class => false,
            EnrichedSecurityScheme::class => false,
        ];
    }
}
