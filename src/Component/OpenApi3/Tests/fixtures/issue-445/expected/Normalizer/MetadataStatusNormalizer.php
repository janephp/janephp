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
class MetadataStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MetadataStatus();
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
            $object->setContentOrLayerSchemaIds($values);
        }
        elseif (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] === null) {
            $object->setContentOrLayerSchemaIds(null);
        }
        if (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['listSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setListSchemaIds($values_1);
        }
        elseif (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] === null) {
            $object->setListSchemaIds(null);
        }
        if (\array_key_exists('state', $data)) {
            $value_2 = $data['state'];
            if (is_string($data['state'])) {
                $value_2 = $data['state'];
            }
            $object->setState($value_2);
        }
        if (\array_key_exists('fieldIdsToCleanup', $data) && $data['fieldIdsToCleanup'] !== null) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['fieldIdsToCleanup'] as $key => $value_3) {
                $values_3 = [];
                foreach ($value_3 as $value_4) {
                    $values_3[] = $value_4;
                }
                $values_2[$key] = $values_3;
            }
            $object->setFieldIdsToCleanup($values_2);
        }
        elseif (\array_key_exists('fieldIdsToCleanup', $data) && $data['fieldIdsToCleanup'] === null) {
            $object->setFieldIdsToCleanup(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('contentOrLayerSchemaIds') && null !== $data->getContentOrLayerSchemaIds()) {
            $values = [];
            foreach ($data->getContentOrLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $dataArray['contentOrLayerSchemaIds'] = $values;
        }
        if ($data->isInitialized('listSchemaIds') && null !== $data->getListSchemaIds()) {
            $values_1 = [];
            foreach ($data->getListSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['listSchemaIds'] = $values_1;
        }
        $value_2 = $data->getState();
        if (is_string($data->getState())) {
            $value_2 = $data->getState();
        }
        $dataArray['state'] = $value_2;
        if ($data->isInitialized('fieldIdsToCleanup') && null !== $data->getFieldIdsToCleanup()) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getFieldIdsToCleanup() as $key => $value_3) {
                $values_3 = [];
                foreach ($value_3 as $value_4) {
                    $values_3[] = $value_4;
                }
                $values_2[$key] = $values_3;
            }
            $dataArray['fieldIdsToCleanup'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataStatus::class => false];
    }
}