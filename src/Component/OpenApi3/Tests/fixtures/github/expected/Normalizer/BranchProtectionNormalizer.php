<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\BranchProtection';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\BranchProtection';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\BranchProtection();
        $validator = new \Github\Validator\BranchProtectionValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('required_status_checks', $data)) {
            $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\BranchProtectionRequiredStatusChecks', 'json', $context));
        }
        if (\array_key_exists('enforce_admins', $data)) {
            $object->setEnforceAdmins($this->denormalizer->denormalize($data['enforce_admins'], 'Github\\Model\\ProtectedBranchAdminEnforced', 'json', $context));
        }
        if (\array_key_exists('required_pull_request_reviews', $data)) {
            $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ProtectedBranchPullRequestReview', 'json', $context));
        }
        if (\array_key_exists('restrictions', $data)) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\BranchRestrictionPolicy', 'json', $context));
        }
        if (\array_key_exists('required_linear_history', $data)) {
            $object->setRequiredLinearHistory($this->denormalizer->denormalize($data['required_linear_history'], 'Github\\Model\\BranchProtectionRequiredLinearHistory', 'json', $context));
        }
        if (\array_key_exists('allow_force_pushes', $data)) {
            $object->setAllowForcePushes($this->denormalizer->denormalize($data['allow_force_pushes'], 'Github\\Model\\BranchProtectionAllowForcePushes', 'json', $context));
        }
        if (\array_key_exists('allow_deletions', $data)) {
            $object->setAllowDeletions($this->denormalizer->denormalize($data['allow_deletions'], 'Github\\Model\\BranchProtectionAllowDeletions', 'json', $context));
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('protection_url', $data)) {
            $object->setProtectionUrl($data['protection_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
        if (null !== $object->getEnforceAdmins()) {
            $data['enforce_admins'] = $this->normalizer->normalize($object->getEnforceAdmins(), 'json', $context);
        }
        if (null !== $object->getRequiredPullRequestReviews()) {
            $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
        }
        if (null !== $object->getRestrictions()) {
            $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
        }
        if (null !== $object->getRequiredLinearHistory()) {
            $data['required_linear_history'] = $this->normalizer->normalize($object->getRequiredLinearHistory(), 'json', $context);
        }
        if (null !== $object->getAllowForcePushes()) {
            $data['allow_force_pushes'] = $this->normalizer->normalize($object->getAllowForcePushes(), 'json', $context);
        }
        if (null !== $object->getAllowDeletions()) {
            $data['allow_deletions'] = $this->normalizer->normalize($object->getAllowDeletions(), 'json', $context);
        }
        $data['enabled'] = $object->getEnabled();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getProtectionUrl()) {
            $data['protection_url'] = $object->getProtectionUrl();
        }
        $validator = new \Github\Validator\BranchProtectionValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}