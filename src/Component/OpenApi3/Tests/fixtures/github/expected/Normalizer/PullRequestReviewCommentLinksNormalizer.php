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
class PullRequestReviewCommentLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\PullRequestReviewCommentLinks';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestReviewCommentLinks';
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
        $object = new \Github\Model\PullRequestReviewCommentLinks();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\PullRequestReviewCommentLinksConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], 'Github\\Model\\PullRequestReviewCommentLinksSelf', 'json', $context));
            unset($data['self']);
        }
        if (\array_key_exists('html', $data)) {
            $object->setHtml($this->denormalizer->denormalize($data['html'], 'Github\\Model\\PullRequestReviewCommentLinksHtml', 'json', $context));
            unset($data['html']);
        }
        if (\array_key_exists('pull_request', $data)) {
            $object->setPullRequest($this->denormalizer->denormalize($data['pull_request'], 'Github\\Model\\PullRequestReviewCommentLinksPullRequest', 'json', $context));
            unset($data['pull_request']);
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
        $data['self'] = $object->getSelf() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getSelf(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['html'] = $object->getHtml() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getHtml(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['pull_request'] = $object->getPullRequest() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPullRequest(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\PullRequestReviewCommentLinksConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\PullRequestReviewCommentLinks' => false);
    }
}