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
            $object->setState($data['state']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('contentOrLayerSchemaIds')) {
            $values = [];
            foreach ($data->getContentOrLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $dataArray['contentOrLayerSchemaIds'] = $values;
        }
        if ($data->isInitialized('listSchemaIds')) {
            $values_1 = [];
            foreach ($data->getListSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['listSchemaIds'] = $values_1;
        }
        $dataArray['state'] = $data->getState();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DisplayValueStatus::class => false];
    }
}