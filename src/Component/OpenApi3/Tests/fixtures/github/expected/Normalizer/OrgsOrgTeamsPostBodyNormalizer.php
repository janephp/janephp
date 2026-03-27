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
class OrgsOrgTeamsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgTeamsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgTeamsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\OrgsOrgTeamsPostBody();
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
            $this->validate($data, new \Github\Validator\OrgsOrgTeamsPostBodyConstraint());
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('maintainers', $data)) {
            $values = [];
            foreach ($data['maintainers'] as $value) {
                $values[] = $value;
            }
            $object->setMaintainers($values);
            unset($data['maintainers']);
        }
        if (\array_key_exists('repo_names', $data)) {
            $values_1 = [];
            foreach ($data['repo_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoNames($values_1);
            unset($data['repo_names']);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
            unset($data['privacy']);
        }
        if (\array_key_exists('permission', $data)) {
            $object->setPermission($data['permission']);
            unset($data['permission']);
        }
        if (\array_key_exists('parent_team_id', $data)) {
            $object->setParentTeamId($data['parent_team_id']);
            unset($data['parent_team_id']);
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
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('maintainers') && null !== $data->getMaintainers()) {
            $values = [];
            foreach ($data->getMaintainers() as $value) {
                $values[] = $value;
            }
            $dataArray['maintainers'] = $values;
        }
        if ($data->isInitialized('repoNames') && null !== $data->getRepoNames()) {
            $values_1 = [];
            foreach ($data->getRepoNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['repo_names'] = $values_1;
        }
        if ($data->isInitialized('privacy') && null !== $data->getPrivacy()) {
            $dataArray['privacy'] = $data->getPrivacy();
        }
        if ($data->isInitialized('permission') && null !== $data->getPermission()) {
            $dataArray['permission'] = $data->getPermission();
        }
        if ($data->isInitialized('parentTeamId') && null !== $data->getParentTeamId()) {
            $dataArray['parent_team_id'] = $data->getParentTeamId();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgTeamsPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgTeamsPostBody::class => false];
    }
}