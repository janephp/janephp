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
class PermissionSetUpdateRequestItemOfMetadataRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\PermissionSetUpdateRequestItemOfMetadataRight::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionSetUpdateRequestItemOfMetadataRight::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\PermissionSetUpdateRequestItemOfMetadataRight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('names', $data)) {
            $value = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->names = $value;
            unset($data['names']);
        }
        if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
            $values_1 = [];
            foreach ($data['userRolesRights'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\UserRoleRightsOfMetadataRight::class, 'json', $context);
            }
            $object->userRolesRights = $values_1;
            unset($data['userRolesRights']);
        }
        elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
            $object->userRolesRights = null;
            unset($data['userRolesRights']);
        }
        if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
            $values_2 = [];
            foreach ($data['userRolesPermissionSetRights'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight::class, 'json', $context);
            }
            $object->userRolesPermissionSetRights = $values_2;
            unset($data['userRolesPermissionSetRights']);
        }
        elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
            $object->userRolesPermissionSetRights = null;
            unset($data['userRolesPermissionSetRights']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->names ?? null;
        if (is_object($data->names ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->names ?? null as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $value = $values;
        }
        $dataArray['names'] = $value;
        if (array_key_exists('userRolesRights', get_object_vars($data)) && null !== ($data->userRolesRights ?? null)) {
            $values_1 = [];
            foreach ($data->userRolesRights ?? null as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['userRolesRights'] = $values_1;
        }
        if (array_key_exists('userRolesPermissionSetRights', get_object_vars($data)) && null !== ($data->userRolesPermissionSetRights ?? null)) {
            $values_2 = [];
            foreach ($data->userRolesPermissionSetRights ?? null as $value_3) {
                $values_2[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['userRolesPermissionSetRights'] = $values_2;
        }
        $dataArray['id'] = $data->id ?? null;
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\PermissionSetUpdateRequestItemOfMetadataRight::class => false];
    }
}