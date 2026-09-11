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
class IdentityProviderEditableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\IdentityProviderEditable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\IdentityProviderEditable::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\IdentityProviderEditable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('claimMapping', $data) && $data['claimMapping'] !== null) {
            $values = [];
            foreach ($data['claimMapping'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class, 'json', $context);
            }
            $object->claimMapping = $values;
        }
        elseif (\array_key_exists('claimMapping', $data)) {
            $object->claimMapping = null;
        }
        if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
            $object->groupClaimType = $data['groupClaimType'];
        }
        elseif (\array_key_exists('groupClaimType', $data)) {
            $object->groupClaimType = null;
        }
        if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
            $values_1 = [];
            foreach ($data['groupMapping'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\IdpGroupToUserRoleMapping::class, 'json', $context);
            }
            $object->groupMapping = $values_1;
        }
        elseif (\array_key_exists('groupMapping', $data)) {
            $object->groupMapping = null;
        }
        if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
            $object->fallbackUserRoleId = $data['fallbackUserRoleId'];
        }
        elseif (\array_key_exists('fallbackUserRoleId', $data)) {
            $object->fallbackUserRoleId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('claimMapping', get_object_vars($data)) && null !== ($data->claimMapping ?? null)) {
            $values = [];
            foreach ($data->claimMapping as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['claimMapping'] = $values;
        }
        if (array_key_exists('groupClaimType', get_object_vars($data)) && null !== ($data->groupClaimType ?? null)) {
            $dataArray['groupClaimType'] = $data->groupClaimType;
        }
        if (array_key_exists('groupMapping', get_object_vars($data)) && null !== ($data->groupMapping ?? null)) {
            $values_1 = [];
            foreach ($data->groupMapping as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['groupMapping'] = $values_1;
        }
        if (array_key_exists('fallbackUserRoleId', get_object_vars($data)) && null !== ($data->fallbackUserRoleId ?? null)) {
            $dataArray['fallbackUserRoleId'] = $data->fallbackUserRoleId;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\IdentityProviderEditable::class => false];
    }
}