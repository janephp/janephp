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
class OrgMembershipNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgMembership::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgMembership::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\OrgMembership();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgMembershipConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
            unset($data['role']);
        }
        if (\array_key_exists('organization_url', $data)) {
            $object->setOrganizationUrl($data['organization_url']);
            unset($data['organization_url']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], \Github\Model\OrganizationSimple::class, 'json', $context));
            unset($data['organization']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\OrgMembershipUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
            unset($data['user']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\OrgMembershipPermissions::class, 'json', $context));
            unset($data['permissions']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['state'] = $data->getState();
        $dataArray['role'] = $data->getRole();
        $dataArray['organization_url'] = $data->getOrganizationUrl();
        $dataArray['organization'] = $data->getOrganization() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getOrganization(), 'json', $context));
        $dataArray['user'] = $data->getUser() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getUser(), 'json', $context));
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $data->getPermissions() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPermissions(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgMembershipConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgMembership::class => false];
    }
}