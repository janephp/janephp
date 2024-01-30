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
class ContentTreeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\ContentTree';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ContentTree';
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
        $object = new \Github\Model\ContentTree();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ContentTreeConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
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
        if (\array_key_exists('git_url', $data) && $data['git_url'] !== null) {
            $object->setGitUrl($data['git_url']);
            unset($data['git_url']);
        }
        elseif (\array_key_exists('git_url', $data) && $data['git_url'] === null) {
            $object->setGitUrl(null);
        }
        if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
            $object->setHtmlUrl(null);
        }
        if (\array_key_exists('download_url', $data) && $data['download_url'] !== null) {
            $object->setDownloadUrl($data['download_url']);
            unset($data['download_url']);
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
            unset($data['entries']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\ContentTreeLinks', 'json', $context));
            unset($data['_links']);
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
        $data['type'] = $object->getType();
        $data['size'] = $object->getSize();
        $data['name'] = $object->getName();
        $data['path'] = $object->getPath();
        $data['sha'] = $object->getSha();
        $data['url'] = $object->getUrl();
        $data['git_url'] = $object->getGitUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['download_url'] = $object->getDownloadUrl();
        if ($object->isInitialized('entries') && null !== $object->getEntries()) {
            $values = array();
            foreach ($object->getEntries() as $value) {
                $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['entries'] = $values;
        }
        $data['_links'] = $object->getLinks() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getLinks(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ContentTreeConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\ContentTree' => false);
    }
}