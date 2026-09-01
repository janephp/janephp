<?php

namespace Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NullableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Model\Nullable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Model\Nullable;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Model\Nullable();
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
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->required = $data['required'];
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->required = null;
        }
        if (\array_key_exists('requiredNull', $data) && $data['requiredNull'] !== null) {
            $value_1 = $data['requiredNull'];
            if (is_string($data['requiredNull'])) {
                $value_1 = $data['requiredNull'];
            } elseif (is_null($data['requiredNull'])) {
                $value_1 = $data['requiredNull'];
            }
            $object->requiredNull = $value_1;
        }
        elseif (\array_key_exists('requiredNull', $data) && $data['requiredNull'] === null) {
            $object->requiredNull = null;
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
        if (null !== ($data->required ?? null)) {
            $dataArray['required'] = $data->required ?? null;
        }
        if (null !== ($data->requiredNull ?? null)) {
            $value_1 = $data->requiredNull ?? null;
            if (is_string($data->requiredNull ?? null)) {
                $value_1 = $data->requiredNull ?? null;
            } elseif (is_null($data->requiredNull ?? null)) {
                $value_1 = $data->requiredNull ?? null;
            }
            $dataArray['requiredNull'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Model\Nullable::class => false];
    }
}