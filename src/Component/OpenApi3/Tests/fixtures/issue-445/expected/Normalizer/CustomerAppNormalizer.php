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
class CustomerAppNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\CustomerApp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\CustomerApp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\CustomerApp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('appId', $data) && $data['appId'] !== null) {
            $object->appId = $data['appId'];
        }
        elseif (\array_key_exists('appId', $data) && $data['appId'] === null) {
            $object->appId = null;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $value = $data['name'];
            if (is_array($data['name']) && $this->isOnlyNumericKeys($data['name'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['name'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->name = $value;
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $value_2 = $data['description'];
            if (is_array($data['description']) && $this->isOnlyNumericKeys($data['description'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['description'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->description = $value_2;
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->description = null;
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->icon = $data['icon'];
        }
        elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->icon = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('appId', get_object_vars($data)) && null !== ($data->appId ?? null)) {
            $dataArray['appId'] = $data->appId ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name ?? null;
            if (is_object($data->name ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->name ?? null as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['name'] = $value;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $value_2 = $data->description ?? null;
            if (is_object($data->description ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->description ?? null as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['description'] = $value_2;
        }
        if (array_key_exists('icon', get_object_vars($data)) && null !== ($data->icon ?? null)) {
            $dataArray['icon'] = $data->icon ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\CustomerApp::class => false];
    }
}