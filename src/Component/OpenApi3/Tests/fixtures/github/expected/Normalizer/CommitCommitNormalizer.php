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
class CommitCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CommitCommit';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CommitCommit';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CommitCommit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\CommitCommitAuthor', 'json', $context));
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\CommitCommitCommitter', 'json', $context));
        }
        elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
            $object->setCommitter(null);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('comment_count', $data)) {
            $object->setCommentCount($data['comment_count']);
        }
        if (\array_key_exists('tree', $data)) {
            $object->setTree($this->denormalizer->denormalize($data['tree'], 'Github\\Model\\CommitCommitTree', 'json', $context));
        }
        if (\array_key_exists('verification', $data)) {
            $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\Verification', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
        $data['message'] = $object->getMessage();
        $data['comment_count'] = $object->getCommentCount();
        $data['tree'] = $this->normalizer->normalize($object->getTree(), 'json', $context);
        if (null !== $object->getVerification()) {
            $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
        }
        return $data;
    }
}