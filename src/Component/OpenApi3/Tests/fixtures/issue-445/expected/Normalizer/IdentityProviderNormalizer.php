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
class IdentityProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\IdentityProvider::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\IdentityProvider::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\IdentityProvider();
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
            unset($data['claimMapping']);
        }
        elseif (\array_key_exists('claimMapping', $data) && $data['claimMapping'] === null) {
            $object->claimMapping = null;
            unset($data['claimMapping']);
        }
        if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
            $object->groupClaimType = $data['groupClaimType'];
            unset($data['groupClaimType']);
        }
        elseif (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] === null) {
            $object->groupClaimType = null;
            unset($data['groupClaimType']);
        }
        if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
            $values_1 = [];
            foreach ($data['groupMapping'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\IdpGroupToUserRoleMapping::class, 'json', $context);
            }
            $object->groupMapping = $values_1;
            unset($data['groupMapping']);
        }
        elseif (\array_key_exists('groupMapping', $data) && $data['groupMapping'] === null) {
            $object->groupMapping = null;
            unset($data['groupMapping']);
        }
        if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
            $object->fallbackUserRoleId = $data['fallbackUserRoleId'];
            unset($data['fallbackUserRoleId']);
        }
        elseif (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] === null) {
            $object->fallbackUserRoleId = null;
            unset($data['fallbackUserRoleId']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
            unset($data['name']);
        }
        if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
            $object->displayName = $data['displayName'];
            unset($data['displayName']);
        }
        elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
            $object->displayName = null;
            unset($data['displayName']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('claimMapping', get_object_vars($data)) && null !== ($data->claimMapping ?? null)) {
            $values = [];
            foreach ($data->claimMapping ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['claimMapping'] = $values;
        }
        if (array_key_exists('groupClaimType', get_object_vars($data)) && null !== ($data->groupClaimType ?? null)) {
            $dataArray['groupClaimType'] = $data->groupClaimType ?? null;
        }
        if (array_key_exists('groupMapping', get_object_vars($data)) && null !== ($data->groupMapping ?? null)) {
            $values_1 = [];
            foreach ($data->groupMapping ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['groupMapping'] = $values_1;
        }
        if (array_key_exists('fallbackUserRoleId', get_object_vars($data)) && null !== ($data->fallbackUserRoleId ?? null)) {
            $dataArray['fallbackUserRoleId'] = $data->fallbackUserRoleId ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('displayName', get_object_vars($data)) && null !== ($data->displayName ?? null)) {
            $dataArray['displayName'] = $data->displayName ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\IdentityProvider::class => false];
    }
}