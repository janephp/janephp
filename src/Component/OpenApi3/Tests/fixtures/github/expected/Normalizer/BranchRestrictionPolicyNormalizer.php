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
class BranchRestrictionPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\BranchRestrictionPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\BranchRestrictionPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\BranchRestrictionPolicy();
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
            $this->validate($data, new \Github\Validator\BranchRestrictionPolicyConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('users_url', $data)) {
            $object->setUsersUrl($data['users_url']);
            unset($data['users_url']);
        }
        if (\array_key_exists('teams_url', $data)) {
            $object->setTeamsUrl($data['teams_url']);
            unset($data['teams_url']);
        }
        if (\array_key_exists('apps_url', $data)) {
            $object->setAppsUrl($data['apps_url']);
            unset($data['apps_url']);
        }
        if (\array_key_exists('users', $data)) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\BranchRestrictionPolicyUsersItem::class, 'json', $context);
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = [];
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\BranchRestrictionPolicyTeamsItem::class, 'json', $context);
            }
            $object->setTeams($values_1);
            unset($data['teams']);
        }
        if (\array_key_exists('apps', $data)) {
            $values_2 = [];
            foreach ($data['apps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Github\Model\BranchRestrictionPolicyAppsItem::class, 'json', $context);
            }
            $object->setApps($values_2);
            unset($data['apps']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['users_url'] = $data->getUsersUrl();
        $dataArray['teams_url'] = $data->getTeamsUrl();
        $dataArray['apps_url'] = $data->getAppsUrl();
        $values = [];
        foreach ($data->getUsers() as $value) {
            $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['users'] = $values;
        $values_1 = [];
        foreach ($data->getTeams() as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['teams'] = $values_1;
        $values_2 = [];
        foreach ($data->getApps() as $value_2) {
            $values_2[] = $value_2 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['apps'] = $values_2;
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\BranchRestrictionPolicyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\BranchRestrictionPolicy::class => false];
    }
}