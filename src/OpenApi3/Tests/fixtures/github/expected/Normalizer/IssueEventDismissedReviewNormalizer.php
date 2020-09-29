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
class IssueEventDismissedReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\IssueEventDismissedReview';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\IssueEventDismissedReview';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\IssueEventDismissedReview();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('review_id', $data)) {
            $object->setReviewId($data['review_id']);
        }
        if (\array_key_exists('dismissal_message', $data) && $data['dismissal_message'] !== null) {
            $object->setDismissalMessage($data['dismissal_message']);
        }
        elseif (\array_key_exists('dismissal_message', $data) && $data['dismissal_message'] === null) {
            $object->setDismissalMessage(null);
        }
        if (\array_key_exists('dismissal_commit_id', $data) && $data['dismissal_commit_id'] !== null) {
            $object->setDismissalCommitId($data['dismissal_commit_id']);
        }
        elseif (\array_key_exists('dismissal_commit_id', $data) && $data['dismissal_commit_id'] === null) {
            $object->setDismissalCommitId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['state'] = $object->getState();
        $data['review_id'] = $object->getReviewId();
        $data['dismissal_message'] = $object->getDismissalMessage();
        if (null !== $object->getDismissalCommitId()) {
            $data['dismissal_commit_id'] = $object->getDismissalCommitId();
        }
        return $data;
    }
}