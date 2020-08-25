<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProtectedBranchRequiredPullRequestReviewsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ProtectedBranchRequiredPullRequestReviews';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ProtectedBranchRequiredPullRequestReviews';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ProtectedBranchRequiredPullRequestReviews();
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('dismiss_stale_reviews', $data)) {
            $object->setDismissStaleReviews($data['dismiss_stale_reviews']);
        }
        if (\array_key_exists('require_code_owner_reviews', $data)) {
            $object->setRequireCodeOwnerReviews($data['require_code_owner_reviews']);
        }
        if (\array_key_exists('required_approving_review_count', $data)) {
            $object->setRequiredApprovingReviewCount($data['required_approving_review_count']);
        }
        if (\array_key_exists('dismissal_restrictions', $data)) {
            $object->setDismissalRestrictions($this->denormalizer->denormalize($data['dismissal_restrictions'], 'Github\\Model\\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getDismissStaleReviews()) {
            $data['dismiss_stale_reviews'] = $object->getDismissStaleReviews();
        }
        if (null !== $object->getRequireCodeOwnerReviews()) {
            $data['require_code_owner_reviews'] = $object->getRequireCodeOwnerReviews();
        }
        if (null !== $object->getRequiredApprovingReviewCount()) {
            $data['required_approving_review_count'] = $object->getRequiredApprovingReviewCount();
        }
        if (null !== $object->getDismissalRestrictions()) {
            $data['dismissal_restrictions'] = $this->normalizer->normalize($object->getDismissalRestrictions(), 'json', $context);
        }
        return $data;
    }
}