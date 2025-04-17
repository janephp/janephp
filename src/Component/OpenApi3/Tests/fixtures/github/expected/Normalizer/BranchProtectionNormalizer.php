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
class BranchProtectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\BranchProtection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\BranchProtection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\BranchProtection();
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchProtectionConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('required_status_checks', $data)) {
            $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], \Github\Model\BranchProtectionRequiredStatusChecks::class, 'json', $context));
            unset($data['required_status_checks']);
        }
        if (\array_key_exists('enforce_admins', $data)) {
            $object->setEnforceAdmins($this->denormalizer->denormalize($data['enforce_admins'], \Github\Model\ProtectedBranchAdminEnforced::class, 'json', $context));
            unset($data['enforce_admins']);
        }
        if (\array_key_exists('required_pull_request_reviews', $data)) {
            $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], \Github\Model\ProtectedBranchPullRequestReview::class, 'json', $context));
            unset($data['required_pull_request_reviews']);
        }
        if (\array_key_exists('restrictions', $data)) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], \Github\Model\BranchRestrictionPolicy::class, 'json', $context));
            unset($data['restrictions']);
        }
        if (\array_key_exists('required_linear_history', $data)) {
            $object->setRequiredLinearHistory($this->denormalizer->denormalize($data['required_linear_history'], \Github\Model\BranchProtectionRequiredLinearHistory::class, 'json', $context));
            unset($data['required_linear_history']);
        }
        if (\array_key_exists('allow_force_pushes', $data)) {
            $object->setAllowForcePushes($this->denormalizer->denormalize($data['allow_force_pushes'], \Github\Model\BranchProtectionAllowForcePushes::class, 'json', $context));
            unset($data['allow_force_pushes']);
        }
        if (\array_key_exists('allow_deletions', $data)) {
            $object->setAllowDeletions($this->denormalizer->denormalize($data['allow_deletions'], \Github\Model\BranchProtectionAllowDeletions::class, 'json', $context));
            unset($data['allow_deletions']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
            unset($data['enabled']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('protection_url', $data)) {
            $object->setProtectionUrl($data['protection_url']);
            unset($data['protection_url']);
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
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        $dataArray['required_status_checks'] = $this->normalizer->normalize($data->getRequiredStatusChecks(), 'json', $context);
        if ($data->isInitialized('enforceAdmins') && null !== $data->getEnforceAdmins()) {
            $dataArray['enforce_admins'] = $this->normalizer->normalize($data->getEnforceAdmins(), 'json', $context);
        }
        if ($data->isInitialized('requiredPullRequestReviews') && null !== $data->getRequiredPullRequestReviews()) {
            $dataArray['required_pull_request_reviews'] = $this->normalizer->normalize($data->getRequiredPullRequestReviews(), 'json', $context);
        }
        if ($data->isInitialized('restrictions') && null !== $data->getRestrictions()) {
            $dataArray['restrictions'] = $this->normalizer->normalize($data->getRestrictions(), 'json', $context);
        }
        if ($data->isInitialized('requiredLinearHistory') && null !== $data->getRequiredLinearHistory()) {
            $dataArray['required_linear_history'] = $this->normalizer->normalize($data->getRequiredLinearHistory(), 'json', $context);
        }
        if ($data->isInitialized('allowForcePushes') && null !== $data->getAllowForcePushes()) {
            $dataArray['allow_force_pushes'] = $this->normalizer->normalize($data->getAllowForcePushes(), 'json', $context);
        }
        if ($data->isInitialized('allowDeletions') && null !== $data->getAllowDeletions()) {
            $dataArray['allow_deletions'] = $this->normalizer->normalize($data->getAllowDeletions(), 'json', $context);
        }
        $dataArray['enabled'] = $data->getEnabled();
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('protectionUrl') && null !== $data->getProtectionUrl()) {
            $dataArray['protection_url'] = $data->getProtectionUrl();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\BranchProtectionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\BranchProtection::class => false];
    }
}