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
class ContentTreeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ContentTree';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ContentTree';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ContentTree();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
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
        if (\array_key_exists('git_url', $data) && $data['git_url'] !== null) {
            $object->setGitUrl($data['git_url']);
        }
        elseif (\array_key_exists('git_url', $data) && $data['git_url'] === null) {
            $object->setGitUrl(null);
        }
        if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
            $object->setHtmlUrl($data['html_url']);
        }
        elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
            $object->setHtmlUrl(null);
        }
        if (\array_key_exists('download_url', $data) && $data['download_url'] !== null) {
            $object->setDownloadUrl($data['download_url']);
        }
        elseif (\array_key_exists('download_url', $data) && $data['download_url'] === null) {
            $object->setDownloadUrl(null);
        }
        if (\array_key_exists('entries', $data)) {
            $values = array();
            foreach ($data['entries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\ContentTreeEntriesItem', 'json', $context);
            }
            $object->setEntries($values);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\ContentTreeLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPath()) {
            $data['path'] = $object->getPath();
        }
        if (null !== $object->getSha()) {
            $data['sha'] = $object->getSha();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getGitUrl()) {
            $data['git_url'] = $object->getGitUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getDownloadUrl()) {
            $data['download_url'] = $object->getDownloadUrl();
        }
        if (null !== $object->getEntries()) {
            $values = array();
            foreach ($object->getEntries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['entries'] = $values;
        }
        if (null !== $object->getLinks()) {
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}