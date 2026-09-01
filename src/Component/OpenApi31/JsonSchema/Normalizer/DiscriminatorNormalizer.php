<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\Discriminator;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DiscriminatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === Discriminator::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Discriminator;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        $object = new Discriminator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('propertyName', $data)) {
            $object->propertyName = $data['propertyName'];
        }
        if (\array_key_exists('mapping', $data) && null !== $data['mapping']) {
            $mapping = [];
            foreach ($data['mapping'] as $key => $value) {
                $mapping[$key] = $value;
            }
            $object->mapping = $mapping;
        } elseif (\array_key_exists('mapping', $data)) {
            $object->mapping = null;
        }

        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (\array_key_exists('propertyName', get_object_vars($object)) && null !== $object->propertyName) {
            $data['propertyName'] = $object->propertyName;
        }
        if (\array_key_exists('mapping', get_object_vars($object)) && null !== $object->mapping) {
            $mapping = [];
            foreach ($object->mapping as $key => $value) {
                $mapping[$key] = $value;
            }
            $data['mapping'] = $mapping;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            Discriminator::class => false,
        ];
    }
}
