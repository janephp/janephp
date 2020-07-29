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
class ContentTreeLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ContentTreeLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ContentTreeLinks';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ContentTreeLinks();
        if (\array_key_exists('git', $data) && $data['git'] !== null) {
            $object->setGit($data['git']);
        }
        elseif (\array_key_exists('git', $data) && $data['git'] === null) {
            $object->setGit(null);
        }
        if (\array_key_exists('html', $data) && $data['html'] !== null) {
            $object->setHtml($data['html']);
        }
        elseif (\array_key_exists('html', $data) && $data['html'] === null) {
            $object->setHtml(null);
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['git'] = $object->getGit();
        $data['html'] = $object->getHtml();
        if (null !== $object->getSelf()) {
            $data['self'] = $object->getSelf();
        }
        return $data;
    }
}