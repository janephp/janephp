<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BranchProtectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchProtection';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchProtection';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\BranchProtection();
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
                $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\BranchProtectionRequiredStatusChecks', 'json', $context));
                unset($data['required_status_checks']);
            }
            if (\array_key_exists('enforce_admins', $data)) {
                $object->setEnforceAdmins($this->denormalizer->denormalize($data['enforce_admins'], 'Github\\Model\\ProtectedBranchAdminEnforced', 'json', $context));
                unset($data['enforce_admins']);
            }
            if (\array_key_exists('required_pull_request_reviews', $data)) {
                $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ProtectedBranchPullRequestReview', 'json', $context));
                unset($data['required_pull_request_reviews']);
            }
            if (\array_key_exists('restrictions', $data)) {
                $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\BranchRestrictionPolicy', 'json', $context));
                unset($data['restrictions']);
            }
            if (\array_key_exists('required_linear_history', $data)) {
                $object->setRequiredLinearHistory($this->denormalizer->denormalize($data['required_linear_history'], 'Github\\Model\\BranchProtectionRequiredLinearHistory', 'json', $context));
                unset($data['required_linear_history']);
            }
            if (\array_key_exists('allow_force_pushes', $data)) {
                $object->setAllowForcePushes($this->denormalizer->denormalize($data['allow_force_pushes'], 'Github\\Model\\BranchProtectionAllowForcePushes', 'json', $context));
                unset($data['allow_force_pushes']);
            }
            if (\array_key_exists('allow_deletions', $data)) {
                $object->setAllowDeletions($this->denormalizer->denormalize($data['allow_deletions'], 'Github\\Model\\BranchProtectionAllowDeletions', 'json', $context));
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
            if ($object->isInitialized('enforceAdmins') && null !== $object->getEnforceAdmins()) {
                $data['enforce_admins'] = $this->normalizer->normalize($object->getEnforceAdmins(), 'json', $context);
            }
            if ($object->isInitialized('requiredPullRequestReviews') && null !== $object->getRequiredPullRequestReviews()) {
                $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
            }
            if ($object->isInitialized('restrictions') && null !== $object->getRestrictions()) {
                $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
            }
            if ($object->isInitialized('requiredLinearHistory') && null !== $object->getRequiredLinearHistory()) {
                $data['required_linear_history'] = $this->normalizer->normalize($object->getRequiredLinearHistory(), 'json', $context);
            }
            if ($object->isInitialized('allowForcePushes') && null !== $object->getAllowForcePushes()) {
                $data['allow_force_pushes'] = $this->normalizer->normalize($object->getAllowForcePushes(), 'json', $context);
            }
            if ($object->isInitialized('allowDeletions') && null !== $object->getAllowDeletions()) {
                $data['allow_deletions'] = $this->normalizer->normalize($object->getAllowDeletions(), 'json', $context);
            }
            $data['enabled'] = $object->getEnabled();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('protectionUrl') && null !== $object->getProtectionUrl()) {
                $data['protection_url'] = $object->getProtectionUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchProtectionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchProtection' => false];
        }
    }
} else {
    class BranchProtectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchProtection';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchProtection';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\BranchProtection();
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
                $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\BranchProtectionRequiredStatusChecks', 'json', $context));
                unset($data['required_status_checks']);
            }
            if (\array_key_exists('enforce_admins', $data)) {
                $object->setEnforceAdmins($this->denormalizer->denormalize($data['enforce_admins'], 'Github\\Model\\ProtectedBranchAdminEnforced', 'json', $context));
                unset($data['enforce_admins']);
            }
            if (\array_key_exists('required_pull_request_reviews', $data)) {
                $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ProtectedBranchPullRequestReview', 'json', $context));
                unset($data['required_pull_request_reviews']);
            }
            if (\array_key_exists('restrictions', $data)) {
                $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\BranchRestrictionPolicy', 'json', $context));
                unset($data['restrictions']);
            }
            if (\array_key_exists('required_linear_history', $data)) {
                $object->setRequiredLinearHistory($this->denormalizer->denormalize($data['required_linear_history'], 'Github\\Model\\BranchProtectionRequiredLinearHistory', 'json', $context));
                unset($data['required_linear_history']);
            }
            if (\array_key_exists('allow_force_pushes', $data)) {
                $object->setAllowForcePushes($this->denormalizer->denormalize($data['allow_force_pushes'], 'Github\\Model\\BranchProtectionAllowForcePushes', 'json', $context));
                unset($data['allow_force_pushes']);
            }
            if (\array_key_exists('allow_deletions', $data)) {
                $object->setAllowDeletions($this->denormalizer->denormalize($data['allow_deletions'], 'Github\\Model\\BranchProtectionAllowDeletions', 'json', $context));
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
            if ($object->isInitialized('enforceAdmins') && null !== $object->getEnforceAdmins()) {
                $data['enforce_admins'] = $this->normalizer->normalize($object->getEnforceAdmins(), 'json', $context);
            }
            if ($object->isInitialized('requiredPullRequestReviews') && null !== $object->getRequiredPullRequestReviews()) {
                $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
            }
            if ($object->isInitialized('restrictions') && null !== $object->getRestrictions()) {
                $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
            }
            if ($object->isInitialized('requiredLinearHistory') && null !== $object->getRequiredLinearHistory()) {
                $data['required_linear_history'] = $this->normalizer->normalize($object->getRequiredLinearHistory(), 'json', $context);
            }
            if ($object->isInitialized('allowForcePushes') && null !== $object->getAllowForcePushes()) {
                $data['allow_force_pushes'] = $this->normalizer->normalize($object->getAllowForcePushes(), 'json', $context);
            }
            if ($object->isInitialized('allowDeletions') && null !== $object->getAllowDeletions()) {
                $data['allow_deletions'] = $this->normalizer->normalize($object->getAllowDeletions(), 'json', $context);
            }
            $data['enabled'] = $object->getEnabled();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('protectionUrl') && null !== $object->getProtectionUrl()) {
                $data['protection_url'] = $object->getProtectionUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchProtectionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchProtection' => false];
        }
    }
}