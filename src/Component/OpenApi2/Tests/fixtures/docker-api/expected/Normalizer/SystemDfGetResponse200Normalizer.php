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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\SystemDfGetResponse200();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LayersSize', $data)) {
            $object->setLayersSize($data['LayersSize']);
        }
        if (\array_key_exists('Images', $data)) {
            $values = [];
            foreach ($data['Images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\ImageSummary::class, 'json', $context);
            }
            $object->setImages($values);
        }
        if (\array_key_exists('Containers', $data)) {
            $values_1 = [];
            foreach ($data['Containers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\ContainerSummary::class, 'json', $context);
            }
            $object->setContainers($values_1);
        }
        if (\array_key_exists('Volumes', $data)) {
            $values_2 = [];
            foreach ($data['Volumes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\Volume::class, 'json', $context);
            }
            $object->setVolumes($values_2);
        }
        if (\array_key_exists('BuildCache', $data)) {
            $values_3 = [];
            foreach ($data['BuildCache'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\BuildCache::class, 'json', $context);
            }
            $object->setBuildCache($values_3);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('layersSize') && null !== $data->getLayersSize()) {
            $dataArray['LayersSize'] = $data->getLayersSize();
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values = [];
            foreach ($data->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Images'] = $values;
        }
        if ($data->isInitialized('containers') && null !== $data->getContainers()) {
            $values_1 = [];
            foreach ($data->getContainers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Containers'] = $values_1;
        }
        if ($data->isInitialized('volumes') && null !== $data->getVolumes()) {
            $values_2 = [];
            foreach ($data->getVolumes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['Volumes'] = $values_2;
        }
        if ($data->isInitialized('buildCache') && null !== $data->getBuildCache()) {
            $values_3 = [];
            foreach ($data->getBuildCache() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
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