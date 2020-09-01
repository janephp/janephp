<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] !== null) {
            $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks', 'json', $context));
        }
        elseif (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] === null) {
            $object->setRequiredStatusChecks(null);
        }
        if (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] !== null) {
            $object->setEnforceAdmins($data['enforce_admins']);
        }
        elseif (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] === null) {
            $object->setEnforceAdmins(null);
        }
        if (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] !== null) {
            $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews', 'json', $context));
        }
        elseif (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] === null) {
            $object->setRequiredPullRequestReviews(null);
        }
        if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions', 'json', $context));
        }
        elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
            $object->setRestrictions(null);
        }
        if (\array_key_exists('required_linear_history', $data)) {
            $object->setRequiredLinearHistory($data['required_linear_history']);
        }
        if (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] !== null) {
            $object->setAllowForcePushes($data['allow_force_pushes']);
        }
        elseif (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] === null) {
            $object->setAllowForcePushes(null);
        }
        if (\array_key_exists('allow_deletions', $data)) {
            $object->setAllowDeletions($data['allow_deletions']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRequiredStatusChecks()) {
            $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
        }
        $data['enforce_admins'] = $object->getEnforceAdmins();
        if (null !== $object->getRequiredPullRequestReviews()) {
            $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
        }
        if (null !== $object->getRestrictions()) {
            $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
        }
        if (null !== $object->getRequiredLinearHistory()) {
            $data['required_linear_history'] = $object->getRequiredLinearHistory();
        }
        $data['allow_force_pushes'] = $object->getAllowForcePushes();
        if (null !== $object->getAllowDeletions()) {
            $data['allow_deletions'] = $object->getAllowDeletions();
        }
        return $data;
    }
}