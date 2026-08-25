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
class OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody();
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
            $this->validate($data, new \Github\Validator\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyConstraint());
        }
        if (\array_key_exists('groups', $data)) {
            $values = [];
            foreach ($data['groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem::class, 'json', $context);
            }
            $object->setGroups($values);
            unset($data['groups']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getGroups() as $value) {
            $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['groups'] = $values;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody::class => false];
    }
}