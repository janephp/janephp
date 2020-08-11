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
class PullRequestLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\PullRequestLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestLinks';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\PullRequestLinks();
        if (\array_key_exists('comments', $data)) {
            $object->setComments($this->denormalizer->denormalize($data['comments'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('commits', $data)) {
            $object->setCommits($this->denormalizer->denormalize($data['commits'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('statuses', $data)) {
            $object->setStatuses($this->denormalizer->denormalize($data['statuses'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('html', $data)) {
            $object->setHtml($this->denormalizer->denormalize($data['html'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($this->denormalizer->denormalize($data['issue'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('review_comments', $data)) {
            $object->setReviewComments($this->denormalizer->denormalize($data['review_comments'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('review_comment', $data)) {
            $object->setReviewComment($this->denormalizer->denormalize($data['review_comment'], 'Github\\Model\\Link', 'json', $context));
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], 'Github\\Model\\Link', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getComments()) {
            $data['comments'] = $this->normalizer->normalize($object->getComments(), 'json', $context);
        }
        if (null !== $object->getCommits()) {
            $data['commits'] = $this->normalizer->normalize($object->getCommits(), 'json', $context);
        }
        if (null !== $object->getStatuses()) {
            $data['statuses'] = $this->normalizer->normalize($object->getStatuses(), 'json', $context);
        }
        if (null !== $object->getHtml()) {
            $data['html'] = $this->normalizer->normalize($object->getHtml(), 'json', $context);
        }
        if (null !== $object->getIssue()) {
            $data['issue'] = $this->normalizer->normalize($object->getIssue(), 'json', $context);
        }
        if (null !== $object->getReviewComments()) {
            $data['review_comments'] = $this->normalizer->normalize($object->getReviewComments(), 'json', $context);
        }
        if (null !== $object->getReviewComment()) {
            $data['review_comment'] = $this->normalizer->normalize($object->getReviewComment(), 'json', $context);
        }
        if (null !== $object->getSelf()) {
            $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        return $data;
    }
}