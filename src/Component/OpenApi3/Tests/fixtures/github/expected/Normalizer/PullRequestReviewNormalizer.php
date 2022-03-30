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
class PullRequestReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\PullRequestReview';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestReview';
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
        $object = new \Github\Model\PullRequestReview();
        $validator = new \Github\Validator\PullRequestReviewValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\PullRequestReviewUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('pull_request_url', $data)) {
            $object->setPullRequestUrl($data['pull_request_url']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\PullRequestReviewLinks', 'json', $context));
        }
        if (\array_key_exists('submitted_at', $data)) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['submitted_at']));
        }
        if (\array_key_exists('commit_id', $data)) {
            $object->setCommitId($data['commit_id']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        $data['body'] = $object->getBody();
        $data['state'] = $object->getState();
        $data['html_url'] = $object->getHtmlUrl();
        $data['pull_request_url'] = $object->getPullRequestUrl();
        $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        if (null !== $object->getSubmittedAt()) {
            $data['submitted_at'] = $object->getSubmittedAt()->format('Y-m-d\\TH:i:sP');
        }
        $data['commit_id'] = $object->getCommitId();
        if (null !== $object->getBodyHtml()) {
            $data['body_html'] = $object->getBodyHtml();
        }
        if (null !== $object->getBodyText()) {
            $data['body_text'] = $object->getBodyText();
        }
        $data['author_association'] = $object->getAuthorAssociation();
        $validator = new \Github\Validator\PullRequestReviewValidator();
        $validator->validate($data);
        return $data;
    }
}