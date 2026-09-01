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
class PermissionSetDetailOfMetadataRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\PermissionSetDetailOfMetadataRight::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionSetDetailOfMetadataRight::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\PermissionSetDetailOfMetadataRight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('exclusive', $data) && \is_int($data['exclusive'])) {
            $data['exclusive'] = (bool) $data['exclusive'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
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
        }
        if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
            $values_1 = [];
            foreach ($data['userRolesRights'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\PermissionUserRoleRightsOfMetadataRight::class, 'json', $context);
            }
            $object->userRolesRights = $values_1;
        }
        elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
            $object->userRolesRights = null;
        }
        if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
            $values_2 = [];
            foreach ($data['userRolesPermissionSetRights'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class, 'json', $context);
            }
            $object->userRolesPermissionSetRights = $values_2;
        }
        elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
            $object->userRolesPermissionSetRights = null;
        }
        if (\array_key_exists('exclusive', $data)) {
            $object->exclusive = $data['exclusive'];
        }
        if (\array_key_exists('ownerTokenId', $data)) {
            $object->ownerTokenId = $data['ownerTokenId'];
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_4 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_4 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->audit = $value_4;
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
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
        $dataArray['exclusive'] = $data->exclusive ?? null;
        $dataArray['ownerTokenId'] = $data->ownerTokenId ?? null;
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value_4 = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value_4 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
            }
            $dataArray['audit'] = $value_4;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\PermissionSetDetailOfMetadataRight::class => false];
    }
}