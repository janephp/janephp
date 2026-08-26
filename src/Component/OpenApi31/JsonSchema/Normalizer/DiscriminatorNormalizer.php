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

        if (\array_key_exists('propertyName', $data) && null !== $data['propertyName']) {
            $object->setPropertyName($data['propertyName']);
        } elseif (\array_key_exists('propertyName', $data)) {
            $object->setPropertyName(null);
        }
        if (\array_key_exists('mapping', $data) && null !== $data['mapping']) {
            $mapping = [];
            foreach ($data['mapping'] as $key => $value) {
                $mapping[$key] = $value;
            }
            $object->setMapping($mapping);
        } elseif (\array_key_exists('mapping', $data)) {
            $object->setMapping(null);
        }

        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getPropertyName() || $object->isInitialized('propertyName')) {
            $data['propertyName'] = $object->getPropertyName();
        }
        if ($object->isInitialized('mapping') && null !== $object->getMapping()) {
            $mapping = [];
            foreach ($object->getMapping() as $key => $value) {
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
