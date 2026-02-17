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
class ProtectedBranchPullRequestReviewDismissalRestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ProtectedBranchPullRequestReviewDismissalRestrictions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ProtectedBranchPullRequestReviewDismissalRestrictions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ProtectedBranchPullRequestReviewDismissalRestrictions();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ProtectedBranchPullRequestReviewDismissalRestrictionsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('users', $data)) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\SimpleUser::class, 'json', $context);
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = [];
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\Team::class, 'json', $context);
            }
            $object->setTeams($values_1);
            unset($data['teams']);
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
        if ($data->isInitialized('users') && null !== $data->getUsers()) {
            $values = [];
            foreach ($data->getUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['users'] = $values;
        }
        if ($data->isInitialized('teams') && null !== $data->getTeams()) {
            $values_1 = [];
            foreach ($data->getTeams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['teams'] = $values_1;
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('usersUrl') && null !== $data->getUsersUrl()) {
            $dataArray['users_url'] = $data->getUsersUrl();
        }
        if ($data->isInitialized('teamsUrl') && null !== $data->getTeamsUrl()) {
            $dataArray['teams_url'] = $data->getTeamsUrl();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ProtectedBranchPullRequestReviewDismissalRestrictionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ProtectedBranchPullRequestReviewDismissalRestrictions::class => false];
    }
}