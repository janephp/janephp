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
class GitCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GitCommitConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\GitCommitAuthor', 'json', $context));
            unset($data['author']);
        }
        if (\array_key_exists('committer', $data)) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\GitCommitCommitter', 'json', $context));
            unset($data['committer']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('tree', $data)) {
            $object->setTree($this->denormalizer->denormalize($data['tree'], 'Github\\Model\\GitCommitTree', 'json', $context));
            unset($data['tree']);
        }
        if (\array_key_exists('parents', $data)) {
            $values = array();
            foreach ($data['parents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\GitCommitParentsItem', 'json', $context);
            }
            $object->setParents($values);
            unset($data['parents']);
        }
        if (\array_key_exists('verification', $data)) {
            $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\GitCommitVerification', 'json', $context));
            unset($data['verification']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('sha') && null !== $object->getSha()) {
            $data['sha'] = $object->getSha();
        }
        if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('author') && null !== $object->getAuthor()) {
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        }
        if ($object->isInitialized('committer') && null !== $object->getCommitter()) {
            $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
        }
        if ($object->isInitialized('message') && null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if ($object->isInitialized('tree') && null !== $object->getTree()) {
            $data['tree'] = $this->normalizer->normalize($object->getTree(), 'json', $context);
        }
        if ($object->isInitialized('parents') && null !== $object->getParents()) {
            $values = array();
            foreach ($object->getParents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['parents'] = $values;
        }
        if ($object->isInitialized('verification') && null !== $object->getVerification()) {
            $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
        }
        if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GitCommitConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}