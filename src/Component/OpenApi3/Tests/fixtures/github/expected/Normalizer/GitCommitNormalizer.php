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
class GitCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\GitCommit';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GitCommit';
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
        $object = new \Github\Model\GitCommit();
        $validator = new \Github\Validator\GitCommitValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\GitCommitAuthor', 'json', $context));
        }
        if (\array_key_exists('committer', $data)) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\GitCommitCommitter', 'json', $context));
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('tree', $data)) {
            $object->setTree($this->denormalizer->denormalize($data['tree'], 'Github\\Model\\GitCommitTree', 'json', $context));
        }
        if (\array_key_exists('parents', $data)) {
            $values = array();
            foreach ($data['parents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\GitCommitParentsItem', 'json', $context);
            }
            $object->setParents($values);
        }
        if (\array_key_exists('verification', $data)) {
            $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\GitCommitVerification', 'json', $context));
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSha()) {
            $data['sha'] = $object->getSha();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getAuthor()) {
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        }
        if (null !== $object->getCommitter()) {
            $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if (null !== $object->getTree()) {
            $data['tree'] = $this->normalizer->normalize($object->getTree(), 'json', $context);
        }
        if (null !== $object->getParents()) {
            $values = array();
            foreach ($object->getParents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['parents'] = $values;
        }
        if (null !== $object->getVerification()) {
            $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        $validator = new \Github\Validator\GitCommitValidator();
        $validator->validate($data);
        return $data;
    }
}