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
class CommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Commit';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Commit';
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
        $object = new \Github\Model\Commit();
        $validator = new \Github\Validator\CommitValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('sha', $data) && $data['sha'] !== null) {
            $object->setSha($data['sha']);
        }
        elseif (\array_key_exists('sha', $data) && $data['sha'] === null) {
            $object->setSha(null);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
        }
        if (\array_key_exists('commit', $data)) {
            $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\CommitCommit', 'json', $context));
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\CommitAuthor', 'json', $context));
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\CommitCommitter', 'json', $context));
        }
        elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
            $object->setCommitter(null);
        }
        if (\array_key_exists('parents', $data)) {
            $values = array();
            foreach ($data['parents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\CommitParentsItem', 'json', $context);
            }
            $object->setParents($values);
        }
        if (\array_key_exists('stats', $data)) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], 'Github\\Model\\CommitStats', 'json', $context));
        }
        if (\array_key_exists('files', $data)) {
            $values_1 = array();
            foreach ($data['files'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\CommitFilesItem', 'json', $context);
            }
            $object->setFiles($values_1);
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
        $data['sha'] = $object->getSha();
        $data['node_id'] = $object->getNodeId();
        $data['html_url'] = $object->getHtmlUrl();
        $data['comments_url'] = $object->getCommentsUrl();
        $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
        $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
        $values = array();
        foreach ($object->getParents() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['parents'] = $values;
        if (null !== $object->getStats()) {
            $data['stats'] = $this->normalizer->normalize($object->getStats(), 'json', $context);
        }
        if (null !== $object->getFiles()) {
            $values_1 = array();
            foreach ($object->getFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['files'] = $values_1;
        }
        $validator = new \Github\Validator\CommitValidator();
        $validator->validate($data);
        return $data;
    }
}