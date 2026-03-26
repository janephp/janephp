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
class SchemaPermissionSetCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaPermissionSetCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaPermissionSetCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\SchemaPermissionSetCreateRequest();
        if (\array_key_exists('exclusive', $data) && \is_int($data['exclusive'])) {
            $data['exclusive'] = (bool) $data['exclusive'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data)) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
            $values = [];
            foreach ($data['userRolesRights'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\UserRoleRightsOfMetadataRight::class, 'json', $context);
            }
            $object->setUserRolesRights($values);
            unset($data['userRolesRights']);
        }
        elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
            $object->setUserRolesRights(null);
        }
        if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
            $values_1 = [];
            foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight::class, 'json', $context);
            }
            $object->setUserRolesPermissionSetRights($values_1);
            unset($data['userRolesPermissionSetRights']);
        }
        elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
            $object->setUserRolesPermissionSetRights(null);
        }
        if (\array_key_exists('exclusive', $data)) {
            $object->setExclusive($data['exclusive']);
            unset($data['exclusive']);
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->setRequestId($data['requestId']);
            unset($data['requestId']);
        }
        elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
            $object->setRequestId(null);
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
        $dataArray['names'] = $data->getNames();
        if ($data->isInitialized('userRolesRights')) {
            $values = [];
            foreach ($data->getUserRolesRights() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['userRolesRights'] = $values;
        }
        if ($data->isInitialized('userRolesPermissionSetRights')) {
            $values_1 = [];
            foreach ($data->getUserRolesPermissionSetRights() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['userRolesPermissionSetRights'] = $values_1;
        }
        $dataArray['exclusive'] = $data->getExclusive();
        if ($data->isInitialized('requestId')) {
            $dataArray['requestId'] = $data->getRequestId();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaPermissionSetCreateRequest::class => false];
    }
}