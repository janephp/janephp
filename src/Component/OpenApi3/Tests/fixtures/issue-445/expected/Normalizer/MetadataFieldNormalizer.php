<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MetadataFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataField::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataField::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MetadataField();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isWritable', $data) && \is_int($data['isWritable'])) {
            $data['isWritable'] = (bool) $data['isWritable'];
        }
        if (\array_key_exists('path', $data)) {
            $object->path = $data['path'];
        }
        if (\array_key_exists('isWritable', $data)) {
            $object->isWritable = $data['isWritable'];
        }
        if (\array_key_exists('dataType', $data)) {
            $value = $data['dataType'];
            if (is_string($data['dataType'])) {
                $value = $data['dataType'];
            }
            $object->dataType = $value;
        }
        if (\array_key_exists('availableKeyFields', $data) && $data['availableKeyFields'] !== null) {
            $values = [];
            foreach ($data['availableKeyFields'] as $value_1) {
                $values[] = $value_1;
            }
            $object->availableKeyFields = $values;
        }
        elseif (\array_key_exists('availableKeyFields', $data) && $data['availableKeyFields'] === null) {
            $object->availableKeyFields = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['path'] = $data->path ?? null;
        $dataArray['isWritable'] = $data->isWritable ?? null;
        $value = $data->dataType ?? null;
        if (is_string($data->dataType ?? null)) {
            $value = $data->dataType ?? null;
        }
        $dataArray['dataType'] = $value;
        if (array_key_exists('availableKeyFields', get_object_vars($data)) && null !== ($data->availableKeyFields ?? null)) {
            $values = [];
            foreach ($data->availableKeyFields ?? null as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['availableKeyFields'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataField::class => false];
    }
}