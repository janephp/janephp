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
class CodeSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CodeSearchResultItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CodeSearchResultItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CodeSearchResultItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
        }
        if (\array_key_exists('file_size', $data)) {
            $object->setFileSize($data['file_size']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('last_modified_at', $data)) {
            $object->setLastModifiedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_modified_at']));
        }
        if (\array_key_exists('line_numbers', $data)) {
            $values = array();
            foreach ($data['line_numbers'] as $value) {
                $values[] = $value;
            }
            $object->setLineNumbers($values);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values_1 = array();
            foreach ($data['text_matches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
            }
            $object->setTextMatches($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['path'] = $object->getPath();
        $data['sha'] = $object->getSha();
        $data['url'] = $object->getUrl();
        $data['git_url'] = $object->getGitUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
        $data['score'] = $object->getScore();
        if (null !== $object->getFileSize()) {
            $data['file_size'] = $object->getFileSize();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getLastModifiedAt()) {
            $data['last_modified_at'] = $object->getLastModifiedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLineNumbers()) {
            $values = array();
            foreach ($object->getLineNumbers() as $value) {
                $values[] = $value;
            }
            $data['line_numbers'] = $values;
        }
        if (null !== $object->getTextMatches()) {
            $values_1 = array();
            foreach ($object->getTextMatches() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['text_matches'] = $values_1;
        }
        return $data;
    }
}