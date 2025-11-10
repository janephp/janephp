<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroup();
        if (\array_key_exists('isFactoryDefault', $data) && \is_int($data['isFactoryDefault'])) {
            $data['isFactoryDefault'] = (bool) $data['isFactoryDefault'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->setTenantId($data['tenantId']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
        }
        if (\array_key_exists('accountSecurityProfileId', $data)) {
            $object->setAccountSecurityProfileId($data['accountSecurityProfileId']);
        }
        if (\array_key_exists('accountSecurityProfileName', $data)) {
            $object->setAccountSecurityProfileName($data['accountSecurityProfileName']);
        }
        if (\array_key_exists('permissions', $data)) {
            $values = [];
            foreach ($data['permissions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class, 'json', $context);
            }
            $object->setPermissions($values);
        }
        if (\array_key_exists('resourceGroups', $data)) {
            $values_1 = [];
            foreach ($data['resourceGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupResourceGroup::class, 'json', $context);
            }
            $object->setResourceGroups($values_1);
        }
        if (\array_key_exists('isFactoryDefault', $data)) {
            $object->setIsFactoryDefault($data['isFactoryDefault']);
        }
        if (\array_key_exists('users', $data)) {
            $values_2 = [];
            foreach ($data['users'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserGetScgUser::class, 'json', $context);
            }
            $object->setUsers($values_2);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('tenantId') && null !== $data->getTenantId()) {
            $dataArray['tenantId'] = $data->getTenantId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['role'] = $data->getRole();
        $dataArray['accountSecurityProfileId'] = $data->getAccountSecurityProfileId();
        if ($data->isInitialized('accountSecurityProfileName') && null !== $data->getAccountSecurityProfileName()) {
            $dataArray['accountSecurityProfileName'] = $data->getAccountSecurityProfileName();
        }
        $values = [];
        foreach ($data->getPermissions() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['permissions'] = $values;
        $values_1 = [];
        foreach ($data->getResourceGroups() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['resourceGroups'] = $values_1;
        if ($data->isInitialized('isFactoryDefault') && null !== $data->getIsFactoryDefault()) {
            $dataArray['isFactoryDefault'] = $data->getIsFactoryDefault();
        }
        if ($data->isInitialized('users') && null !== $data->getUsers()) {
            $values_2 = [];
            foreach ($data->getUsers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['users'] = $values_2;
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroup::class => false];
    }
}