<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SystemDfGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SystemDfGetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SystemDfGetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SystemDfGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
        }
        if (\array_key_exists('LayersSize', $data)) {
            $object->layersSize = $data['LayersSize'];
        }
        if (\array_key_exists('Images', $data)) {
            $values = [];
            foreach ($data['Images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\ImageSummary::class, 'json', $context);
            }
            $object->images = $values;
        }
        if (\array_key_exists('Containers', $data)) {
            $values_1 = [];
            foreach ($data['Containers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\ContainerSummary::class, 'json', $context);
            }
            $object->containers = $values_1;
        }
        if (\array_key_exists('Volumes', $data)) {
            $values_2 = [];
            foreach ($data['Volumes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\Volume::class, 'json', $context);
            }
            $object->volumes = $values_2;
        }
        if (\array_key_exists('BuildCache', $data)) {
            $values_3 = [];
            foreach ($data['BuildCache'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\BuildCache::class, 'json', $context);
            }
            $object->buildCache = $values_3;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('layersSize', get_object_vars($data)) && null !== ($data->layersSize ?? null)) {
            $dataArray['LayersSize'] = $data->layersSize ?? null;
        }
        if (array_key_exists('images', get_object_vars($data)) && null !== ($data->images ?? null)) {
            $values = [];
            foreach ($data->images ?? null as $value) {
                $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['Images'] = $values;
        }
        if (array_key_exists('containers', get_object_vars($data)) && null !== ($data->containers ?? null)) {
            $values_1 = [];
            foreach ($data->containers ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['Containers'] = $values_1;
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $values_2 = [];
            foreach ($data->volumes ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['Volumes'] = $values_2;
        }
        if (array_key_exists('buildCache', get_object_vars($data)) && null !== ($data->buildCache ?? null)) {
            $values_3 = [];
            foreach ($data->buildCache ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['BuildCache'] = $values_3;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SystemDfGetResponse200::class => false];
    }
}