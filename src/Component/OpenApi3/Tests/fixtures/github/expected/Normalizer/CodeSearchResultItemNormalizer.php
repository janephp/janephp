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
class CodeSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\CodeSearchResultItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CodeSearchResultItem';
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
        $object = new \Github\Model\CodeSearchResultItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CodeSearchResultItemConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
            unset($data['git_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
            unset($data['repository']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        if (\array_key_exists('file_size', $data)) {
            $object->setFileSize($data['file_size']);
            unset($data['file_size']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('last_modified_at', $data)) {
            $object->setLastModifiedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_modified_at']));
            unset($data['last_modified_at']);
        }
        if (\array_key_exists('line_numbers', $data)) {
            $values = array();
            foreach ($data['line_numbers'] as $value) {
                $values[] = $value;
            }
            $object->setLineNumbers($values);
            unset($data['line_numbers']);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values_1 = array();
            foreach ($data['text_matches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
            }
            $object->setTextMatches($values_1);
            unset($data['text_matches']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['name'] = $object->getName();
        $data['path'] = $object->getPath();
        $data['sha'] = $object->getSha();
        $data['url'] = $object->getUrl();
        $data['git_url'] = $object->getGitUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['repository'] = $object->getRepository() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getRepository(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['score'] = $object->getScore();
        if ($object->isInitialized('fileSize') && null !== $object->getFileSize()) {
            $data['file_size'] = $object->getFileSize();
        }
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if ($object->isInitialized('lastModifiedAt') && null !== $object->getLastModifiedAt()) {
            $data['last_modified_at'] = $object->getLastModifiedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('lineNumbers') && null !== $object->getLineNumbers()) {
            $values = array();
            foreach ($object->getLineNumbers() as $value) {
                $values[] = $value;
            }
            $data['line_numbers'] = $values;
        }
        if ($object->isInitialized('textMatches') && null !== $object->getTextMatches()) {
            $values_1 = array();
            foreach ($object->getTextMatches() as $value_1) {
                $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['text_matches'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CodeSearchResultItemConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\CodeSearchResultItem' => false);
    }
}