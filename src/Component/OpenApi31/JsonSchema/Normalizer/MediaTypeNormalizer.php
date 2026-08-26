<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MediaTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\MediaType::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\MediaType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schema', $data) && $data['schema'] !== null) {
            $object->setSchema($data['schema']);
        } elseif (\array_key_exists('schema', $data) && $data['schema'] === null) {
            $object->setSchema(null);
        }
        if (\array_key_exists('encoding', $data) && $data['encoding'] !== null) {
            $values = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['encoding'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi31\JsonSchema\Model\Encoding::class, 'json', $context);
            }
            $object->setEncoding($values);
        } elseif (\array_key_exists('encoding', $data) && $data['encoding'] === null) {
            $object->setEncoding(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('schema') && null !== $data->getSchema()) {
            $dataArray['schema'] = $data->getSchema();
        }
        if ($data->isInitialized('encoding') && null !== $data->getEncoding()) {
            $values = [];
            foreach ($data->getEncoding() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['encoding'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\MediaType::class => false];
    }
}
