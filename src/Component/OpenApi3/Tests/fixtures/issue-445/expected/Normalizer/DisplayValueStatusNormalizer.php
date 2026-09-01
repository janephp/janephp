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
class DisplayValueStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DisplayValueStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DisplayValueStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DisplayValueStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] !== null) {
            $values = [];
            foreach ($data['contentOrLayerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->contentOrLayerSchemaIds = $values;
        }
        elseif (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] === null) {
            $object->contentOrLayerSchemaIds = null;
        }
        if (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['listSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->listSchemaIds = $values_1;
        }
        elseif (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] === null) {
            $object->listSchemaIds = null;
        }
        if (\array_key_exists('state', $data)) {
            $value_2 = $data['state'];
            if (is_string($data['state'])) {
                $value_2 = $data['state'];
            }
            $object->state = $value_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('contentOrLayerSchemaIds', get_object_vars($data)) && null !== ($data->contentOrLayerSchemaIds ?? null)) {
            $values = [];
            foreach ($data->contentOrLayerSchemaIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['contentOrLayerSchemaIds'] = $values;
        }
        if (array_key_exists('listSchemaIds', get_object_vars($data)) && null !== ($data->listSchemaIds ?? null)) {
            $values_1 = [];
            foreach ($data->listSchemaIds ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['listSchemaIds'] = $values_1;
        }
        $value_2 = $data->state ?? null;
        if (is_string($data->state ?? null)) {
            $value_2 = $data->state ?? null;
        }
        $dataArray['state'] = $value_2;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DisplayValueStatus::class => false];
    }
}