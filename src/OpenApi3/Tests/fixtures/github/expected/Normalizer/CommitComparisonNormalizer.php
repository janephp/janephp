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
class CommitComparisonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CommitComparison';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CommitComparison';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CommitComparison();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('permalink_url', $data)) {
            $object->setPermalinkUrl($data['permalink_url']);
        }
        if (\array_key_exists('diff_url', $data)) {
            $object->setDiffUrl($data['diff_url']);
        }
        if (\array_key_exists('patch_url', $data)) {
            $object->setPatchUrl($data['patch_url']);
        }
        if (\array_key_exists('base_commit', $data)) {
            $object->setBaseCommit($this->denormalizer->denormalize($data['base_commit'], 'Github\\Model\\Commit', 'json', $context));
        }
        if (\array_key_exists('merge_base_commit', $data)) {
            $object->setMergeBaseCommit($this->denormalizer->denormalize($data['merge_base_commit'], 'Github\\Model\\Commit', 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('ahead_by', $data)) {
            $object->setAheadBy($data['ahead_by']);
        }
        if (\array_key_exists('behind_by', $data)) {
            $object->setBehindBy($data['behind_by']);
        }
        if (\array_key_exists('total_commits', $data)) {
            $object->setTotalCommits($data['total_commits']);
        }
        if (\array_key_exists('commits', $data)) {
            $values = array();
            foreach ($data['commits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Commit', 'json', $context);
            }
            $object->setCommits($values);
        }
        if (\array_key_exists('files', $data)) {
            $values_1 = array();
            foreach ($data['files'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\DiffEntry', 'json', $context);
            }
            $object->setFiles($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getPermalinkUrl()) {
            $data['permalink_url'] = $object->getPermalinkUrl();
        }
        if (null !== $object->getDiffUrl()) {
            $data['diff_url'] = $object->getDiffUrl();
        }
        if (null !== $object->getPatchUrl()) {
            $data['patch_url'] = $object->getPatchUrl();
        }
        if (null !== $object->getBaseCommit()) {
            $data['base_commit'] = $this->normalizer->normalize($object->getBaseCommit(), 'json', $context);
        }
        if (null !== $object->getMergeBaseCommit()) {
            $data['merge_base_commit'] = $this->normalizer->normalize($object->getMergeBaseCommit(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getAheadBy()) {
            $data['ahead_by'] = $object->getAheadBy();
        }
        if (null !== $object->getBehindBy()) {
            $data['behind_by'] = $object->getBehindBy();
        }
        if (null !== $object->getTotalCommits()) {
            $data['total_commits'] = $object->getTotalCommits();
        }
        if (null !== $object->getCommits()) {
            $values = array();
            foreach ($object->getCommits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['commits'] = $values;
        }
        if (null !== $object->getFiles()) {
            $values_1 = array();
            foreach ($object->getFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['files'] = $values_1;
        }
        return $data;
    }
}