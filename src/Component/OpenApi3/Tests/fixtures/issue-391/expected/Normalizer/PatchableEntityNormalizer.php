<?php

namespace Gounlaf\JanephpBug\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gounlaf\JanephpBug\Runtime\Normalizer\CheckArray;
use Gounlaf\JanephpBug\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PatchableEntityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gounlaf\JanephpBug\Model\PatchableEntity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gounlaf\JanephpBug\Model\PatchableEntity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Gounlaf\JanephpBug\Model\PatchableEntity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('nullable_property', $data) && $data['nullable_property'] !== null) {
            $object->setNullableProperty($data['nullable_property']);
            unset($data['nullable_property']);
        }
        elseif (\array_key_exists('nullable_property', $data) && $data['nullable_property'] === null) {
            $object->setNullableProperty(null);
        }
        if (\array_key_exists('nullable_and_required_property', $data) && $data['nullable_and_required_property'] !== null) {
            $object->setNullableAndRequiredProperty($data['nullable_and_required_property']);
            unset($data['nullable_and_required_property']);
        }
        elseif (\array_key_exists('nullable_and_required_property', $data) && $data['nullable_and_required_property'] === null) {
            $object->setNullableAndRequiredProperty(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nullableProperty') && null !== $data->getNullableProperty()) {
            $dataArray['nullable_property'] = $data->getNullableProperty();
        }
        $dataArray['nullable_and_required_property'] = $data->getNullableAndRequiredProperty();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gounlaf\JanephpBug\Model\PatchableEntity::class => false];
    }
}