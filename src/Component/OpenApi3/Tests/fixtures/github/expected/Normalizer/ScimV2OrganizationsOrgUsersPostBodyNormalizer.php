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
class ScimV2OrganizationsOrgUsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ScimV2OrganizationsOrgUsersPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ScimV2OrganizationsOrgUsersPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ScimV2OrganizationsOrgUsersPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersPostBodyConstraint());
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
            unset($data['userName']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], \Github\Model\ScimV2OrganizationsOrgUsersPostBodyName::class, 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('emails', $data)) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\ScimV2OrganizationsOrgUsersPostBodyEmailsItem::class, 'json', $context);
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('schemas', $data)) {
            $values_1 = [];
            foreach ($data['schemas'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSchemas($values_1);
            unset($data['schemas']);
        }
        if (\array_key_exists('displayName', $data)) {
            $object->setDisplayName($data['displayName']);
            unset($data['displayName']);
        }
        if (\array_key_exists('externalId', $data)) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        if (\array_key_exists('groups', $data)) {
            $values_2 = [];
            foreach ($data['groups'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setGroups($values_2);
            unset($data['groups']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['userName'] = $data->getUserName();
        $dataArray['name'] = $data->getName() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getName(), 'json', $context));
        $values = [];
        foreach ($data->getEmails() as $value) {
            $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['emails'] = $values;
        if ($data->isInitialized('schemas') && null !== $data->getSchemas()) {
            $values_1 = [];
            foreach ($data->getSchemas() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['schemas'] = $values_1;
        }
        if ($data->isInitialized('displayName') && null !== $data->getDisplayName()) {
            $dataArray['displayName'] = $data->getDisplayName();
        }
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['externalId'] = $data->getExternalId();
        }
        if ($data->isInitialized('groups') && null !== $data->getGroups()) {
            $values_2 = [];
            foreach ($data->getGroups() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['groups'] = $values_2;
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ScimV2OrganizationsOrgUsersPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ScimV2OrganizationsOrgUsersPostBody::class => false];
    }
}