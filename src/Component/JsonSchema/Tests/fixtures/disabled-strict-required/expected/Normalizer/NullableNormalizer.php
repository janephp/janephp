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
class NullableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Nullable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Nullable;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Nullable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('onlyNull', $data) && $data['onlyNull'] !== null) {
            $object->setOnlyNull($data['onlyNull']);
        }
        elseif (\array_key_exists('onlyNull', $data) && $data['onlyNull'] === null) {
            $object->setOnlyNull(null);
        }
        if (\array_key_exists('nullOrString', $data) && $data['nullOrString'] !== null) {
            $value = $data['nullOrString'];
            if (is_string($data['nullOrString'])) {
                $value = $data['nullOrString'];
            } elseif (is_null($data['nullOrString'])) {
                $value = $data['nullOrString'];
            }
            $object->setNullOrString($value);
        }
        elseif (\array_key_exists('nullOrString', $data) && $data['nullOrString'] === null) {
            $object->setNullOrString(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('requiredNull', $data) && $data['requiredNull'] !== null) {
            $value_1 = $data['requiredNull'];
            if (is_string($data['requiredNull'])) {
                $value_1 = $data['requiredNull'];
            } elseif (is_null($data['requiredNull'])) {
                $value_1 = $data['requiredNull'];
            }
            $object->setRequiredNull($value_1);
        }
        elseif (\array_key_exists('requiredNull', $data) && $data['requiredNull'] === null) {
            $object->setRequiredNull(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('onlyNull') && null !== $data->getOnlyNull()) {
            $dataArray['onlyNull'] = $data->getOnlyNull();
        }
        if ($data->isInitialized('nullOrString') && null !== $data->getNullOrString()) {
            $value = $data->getNullOrString();
            if (is_string($data->getNullOrString())) {
                $value = $data->getNullOrString();
            } elseif (is_null($data->getNullOrString())) {
                $value = $data->getNullOrString();
            }
            $dataArray['nullOrString'] = $value;
        }
        if (null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        if (null !== $data->getRequiredNull()) {
            $value_1 = $data->getRequiredNull();
            if (is_string($data->getRequiredNull())) {
                $value_1 = $data->getRequiredNull();
            } elseif (is_null($data->getRequiredNull())) {
                $value_1 = $data->getRequiredNull();
            }
            $dataArray['requiredNull'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Nullable::class => false];
    }
}