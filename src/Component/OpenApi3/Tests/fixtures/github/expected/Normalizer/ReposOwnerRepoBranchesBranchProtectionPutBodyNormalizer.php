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
class ReposOwnerRepoBranchesBranchProtectionPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody();
        if (\array_key_exists('enforce_admins', $data) && \is_int($data['enforce_admins'])) {
            $data['enforce_admins'] = (bool) $data['enforce_admins'];
        }
        if (\array_key_exists('required_linear_history', $data) && \is_int($data['required_linear_history'])) {
            $data['required_linear_history'] = (bool) $data['required_linear_history'];
        }
        if (\array_key_exists('allow_force_pushes', $data) && \is_int($data['allow_force_pushes'])) {
            $data['allow_force_pushes'] = (bool) $data['allow_force_pushes'];
        }
        if (\array_key_exists('allow_deletions', $data) && \is_int($data['allow_deletions'])) {
            $data['allow_deletions'] = (bool) $data['allow_deletions'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] !== null) {
            $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks::class, 'json', $context));
            unset($data['required_status_checks']);
        }
        elseif (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] === null) {
            $object->setRequiredStatusChecks(null);
        }
        if (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] !== null) {
            $object->setEnforceAdmins($data['enforce_admins']);
            unset($data['enforce_admins']);
        }
        elseif (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] === null) {
            $object->setEnforceAdmins(null);
        }
        if (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] !== null) {
            $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews::class, 'json', $context));
            unset($data['required_pull_request_reviews']);
        }
        elseif (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] === null) {
            $object->setRequiredPullRequestReviews(null);
        }
        if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions::class, 'json', $context));
            unset($data['restrictions']);
        }
        elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
            $object->setRestrictions(null);
        }
        if (\array_key_exists('required_linear_history', $data)) {
            $object->setRequiredLinearHistory($data['required_linear_history']);
            unset($data['required_linear_history']);
        }
        if (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] !== null) {
            $object->setAllowForcePushes($data['allow_force_pushes']);
            unset($data['allow_force_pushes']);
        }
        elseif (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] === null) {
            $object->setAllowForcePushes(null);
        }
        if (\array_key_exists('allow_deletions', $data)) {
            $object->setAllowDeletions($data['allow_deletions']);
            unset($data['allow_deletions']);
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
        $dataArray['required_status_checks'] = $this->normalizer->normalize($data->getRequiredStatusChecks(), 'json', $context);
        $dataArray['enforce_admins'] = $data->getEnforceAdmins();
        $dataArray['required_pull_request_reviews'] = $this->normalizer->normalize($data->getRequiredPullRequestReviews(), 'json', $context);
        $dataArray['restrictions'] = $this->normalizer->normalize($data->getRestrictions(), 'json', $context);
        if ($data->isInitialized('requiredLinearHistory') && null !== $data->getRequiredLinearHistory()) {
            $dataArray['required_linear_history'] = $data->getRequiredLinearHistory();
        }
        if ($data->isInitialized('allowForcePushes')) {
            $dataArray['allow_force_pushes'] = $data->getAllowForcePushes();
        }
        if ($data->isInitialized('allowDeletions') && null !== $data->getAllowDeletions()) {
            $dataArray['allow_deletions'] = $data->getAllowDeletions();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody::class => false];
    }
}