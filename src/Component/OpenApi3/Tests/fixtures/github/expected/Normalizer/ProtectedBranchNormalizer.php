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
class ProtectedBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ProtectedBranch';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ProtectedBranch';
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
        $object = new \Github\Model\ProtectedBranch();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ProtectedBranchConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('required_status_checks', $data)) {
            $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\StatusCheckPolicy', 'json', $context));
            unset($data['required_status_checks']);
        }
        if (\array_key_exists('required_pull_request_reviews', $data)) {
            $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ProtectedBranchRequiredPullRequestReviews', 'json', $context));
            unset($data['required_pull_request_reviews']);
        }
        if (\array_key_exists('required_signatures', $data)) {
            $object->setRequiredSignatures($this->denormalizer->denormalize($data['required_signatures'], 'Github\\Model\\ProtectedBranchRequiredSignatures', 'json', $context));
            unset($data['required_signatures']);
        }
        if (\array_key_exists('enforce_admins', $data)) {
            $object->setEnforceAdmins($this->denormalizer->denormalize($data['enforce_admins'], 'Github\\Model\\ProtectedBranchEnforceAdmins', 'json', $context));
            unset($data['enforce_admins']);
        }
        if (\array_key_exists('required_linear_history', $data)) {
            $object->setRequiredLinearHistory($this->denormalizer->denormalize($data['required_linear_history'], 'Github\\Model\\ProtectedBranchRequiredLinearHistory', 'json', $context));
            unset($data['required_linear_history']);
        }
        if (\array_key_exists('allow_force_pushes', $data)) {
            $object->setAllowForcePushes($this->denormalizer->denormalize($data['allow_force_pushes'], 'Github\\Model\\ProtectedBranchAllowForcePushes', 'json', $context));
            unset($data['allow_force_pushes']);
        }
        if (\array_key_exists('allow_deletions', $data)) {
            $object->setAllowDeletions($this->denormalizer->denormalize($data['allow_deletions'], 'Github\\Model\\ProtectedBranchAllowDeletions', 'json', $context));
            unset($data['allow_deletions']);
        }
        if (\array_key_exists('restrictions', $data)) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\BranchRestrictionPolicy', 'json', $context));
            unset($data['restrictions']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        if (null !== $object->getRequiredStatusChecks()) {
            $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
        }
        if (null !== $object->getRequiredPullRequestReviews()) {
            $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
        }
        if (null !== $object->getRequiredSignatures()) {
            $data['required_signatures'] = $this->normalizer->normalize($object->getRequiredSignatures(), 'json', $context);
        }
        if (null !== $object->getEnforceAdmins()) {
            $data['enforce_admins'] = $this->normalizer->normalize($object->getEnforceAdmins(), 'json', $context);
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
        if (null !== $object->getRestrictions()) {
            $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ProtectedBranchConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}