<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('onlyNull', $data) && $data['onlyNull'] !== null) {
            $object->onlyNull = $data['onlyNull'];
        }
        elseif (\array_key_exists('onlyNull', $data) && $data['onlyNull'] === null) {
            $object->onlyNull = null;
        }
        if (\array_key_exists('nullOrString', $data) && $data['nullOrString'] !== null) {
            $value = $data['nullOrString'];
            if (is_string($data['nullOrString'])) {
                $value = $data['nullOrString'];
            } elseif (is_null($data['nullOrString'])) {
                $value = $data['nullOrString'];
            }
            $object->nullOrString = $value;
        }
        elseif (\array_key_exists('nullOrString', $data) && $data['nullOrString'] === null) {
            $object->nullOrString = null;
        }
        if (\array_key_exists('array', $data) && $data['array'] !== null) {
            $values = [];
            foreach ($data['array'] as $value_1) {
                $values[] = $value_1;
            }
            $object->array = $values;
        }
        elseif (\array_key_exists('array', $data) && $data['array'] === null) {
            $object->array = null;
        }
        if (\array_key_exists('object', $data) && $data['object'] !== null) {
            $values_1 = new \Jane\Component\JsonSchema\Tests\Expected\Runtime\JsonObject();
            foreach ($data['object'] as $key => $value_2) {
                $values_1[$key] = $value_2;
            }
            $object->object = $values_1;
        }
        elseif (\array_key_exists('object', $data) && $data['object'] === null) {
            $object->object = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('onlyNull', get_object_vars($data)) && null !== ($data->onlyNull ?? null)) {
            $dataArray['onlyNull'] = $data->onlyNull ?? null;
        }
        if (array_key_exists('nullOrString', get_object_vars($data)) && null !== ($data->nullOrString ?? null)) {
            $value = $data->nullOrString ?? null;
            if (is_string($data->nullOrString ?? null)) {
                $value = $data->nullOrString ?? null;
            } elseif (is_null($data->nullOrString ?? null)) {
                $value = $data->nullOrString ?? null;
            }
            $dataArray['nullOrString'] = $value;
        }
        if (array_key_exists('array', get_object_vars($data)) && null !== ($data->array ?? null)) {
            $values = [];
            foreach ($data->array ?? null as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['array'] = $values;
        }
        if (array_key_exists('object', get_object_vars($data)) && null !== ($data->object ?? null)) {
            $values_1 = new \Jane\Component\JsonSchema\Tests\Expected\Runtime\JsonObject();
            foreach ($data->object ?? null as $key => $value_2) {
                $values_1[$key] = $value_2;
            }
            $dataArray['object'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false];
    }
}