<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScimUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ScimUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ScimUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ScimUser();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ScimUserConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemas', $data)) {
            $values = [];
            foreach ($data['schemas'] as $value) {
                $values[] = $value;
            }
            $object->setSchemas($values);
            unset($data['schemas']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('userName', $data) && $data['userName'] !== null) {
            $object->setUserName($data['userName']);
            unset($data['userName']);
        }
        elseif (\array_key_exists('userName', $data) && $data['userName'] === null) {
            $object->setUserName(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], \Github\Model\ScimUserName::class, 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('emails', $data)) {
            $values_1 = [];
            foreach ($data['emails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\ScimUserEmailsItem::class, 'json', $context);
            }
            $object->setEmails($values_1);
            unset($data['emails']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('meta', $data)) {
            $object->setMeta($this->denormalizer->denormalize($data['meta'], \Github\Model\ScimUserMeta::class, 'json', $context));
            unset($data['meta']);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
            unset($data['organization_id']);
        }
        if (\array_key_exists('operations', $data)) {
            $values_2 = [];
            foreach ($data['operations'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Github\Model\ScimUserOperationsItem::class, 'json', $context);
            }
            $object->setOperations($values_2);
            unset($data['operations']);
        }
        if (\array_key_exists('groups', $data)) {
            $values_3 = [];
            foreach ($data['groups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Github\Model\ScimUserGroupsItem::class, 'json', $context);
            }
            $object->setGroups($values_3);
            unset($data['groups']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getSchemas() as $value) {
            $values[] = $value;
        }
        $dataArray['schemas'] = $values;
        $dataArray['id'] = $data->getId();
        $dataArray['externalId'] = $data->getExternalId();
        $dataArray['userName'] = $data->getUserName();
        $dataArray['name'] = $this->normalizer->normalize($data->getName(), 'json', $context);
        $values_1 = [];
        foreach ($data->getEmails() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['emails'] = $values_1;
        $dataArray['active'] = $data->getActive();
        $dataArray['meta'] = $this->normalizer->normalize($data->getMeta(), 'json', $context);
        if ($data->isInitialized('organizationId') && null !== $data->getOrganizationId()) {
            $dataArray['organization_id'] = $data->getOrganizationId();
        }
        if ($data->isInitialized('operations') && null !== $data->getOperations()) {
            $values_2 = [];
            foreach ($data->getOperations() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['operations'] = $values_2;
        }
        if ($data->isInitialized('groups') && null !== $data->getGroups()) {
            $values_3 = [];
            foreach ($data->getGroups() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['groups'] = $values_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ScimUserConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ScimUser::class => false];
    }
}