<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScguserScgUserGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isFactoryDefault', $data) && \is_int($data['isFactoryDefault'])) {
            $data['isFactoryDefault'] = (bool) $data['isFactoryDefault'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->tenantId = $data['tenantId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('role', $data)) {
            $object->role = $data['role'];
        }
        if (\array_key_exists('accountSecurityProfileId', $data)) {
            $object->accountSecurityProfileId = $data['accountSecurityProfileId'];
        }
        if (\array_key_exists('accountSecurityProfileName', $data)) {
            $object->accountSecurityProfileName = $data['accountSecurityProfileName'];
        }
        if (\array_key_exists('permissions', $data)) {
            $values = [];
            foreach ($data['permissions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class, 'json', $context);
            }
            $object->permissions = $values;
        }
        if (\array_key_exists('resourceGroups', $data)) {
            $values_1 = [];
            foreach ($data['resourceGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupResourceGroup::class, 'json', $context);
            }
            $object->resourceGroups = $values_1;
        }
        if (\array_key_exists('isFactoryDefault', $data)) {
            $object->isFactoryDefault = $data['isFactoryDefault'];
        }
        if (\array_key_exists('users', $data)) {
            $values_2 = [];
            foreach ($data['users'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserGetScgUser::class, 'json', $context);
            }
            $object->users = $values_2;
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->creatorId = $data['creatorId'];
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->modifierId = $data['modifierId'];
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->creatorUsername = $data['creatorUsername'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('tenantId', get_object_vars($data)) && null !== ($data->tenantId ?? null)) {
            $dataArray['tenantId'] = $data->tenantId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['role'] = $data->role ?? null;
        $dataArray['accountSecurityProfileId'] = $data->accountSecurityProfileId ?? null;
        if (array_key_exists('accountSecurityProfileName', get_object_vars($data)) && null !== ($data->accountSecurityProfileName ?? null)) {
            $dataArray['accountSecurityProfileName'] = $data->accountSecurityProfileName ?? null;
        }
        $values = [];
        foreach ($data->permissions ?? null as $value) {
            $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['permissions'] = $values;
        $values_1 = [];
        foreach ($data->resourceGroups ?? null as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['resourceGroups'] = $values_1;
        if (array_key_exists('isFactoryDefault', get_object_vars($data)) && null !== ($data->isFactoryDefault ?? null)) {
            $dataArray['isFactoryDefault'] = $data->isFactoryDefault ?? null;
        }
        if (array_key_exists('users', get_object_vars($data)) && null !== ($data->users ?? null)) {
            $values_2 = [];
            foreach ($data->users ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['users'] = $values_2;
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime ?? null;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime ?? null;
        }
        if (array_key_exists('creatorId', get_object_vars($data)) && null !== ($data->creatorId ?? null)) {
            $dataArray['creatorId'] = $data->creatorId ?? null;
        }
        if (array_key_exists('modifierId', get_object_vars($data)) && null !== ($data->modifierId ?? null)) {
            $dataArray['modifierId'] = $data->modifierId ?? null;
        }
        if (array_key_exists('creatorUsername', get_object_vars($data)) && null !== ($data->creatorUsername ?? null)) {
            $dataArray['creatorUsername'] = $data->creatorUsername ?? null;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroup::class => false];
    }
}