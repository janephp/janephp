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
class RunnerApplicationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\RunnerApplication';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\RunnerApplication';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\RunnerApplication();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('os', $data)) {
            $object->setOs($data['os']);
        }
        if (\array_key_exists('architecture', $data)) {
            $object->setArchitecture($data['architecture']);
        }
        if (\array_key_exists('download_url', $data)) {
            $object->setDownloadUrl($data['download_url']);
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOs()) {
            $data['os'] = $object->getOs();
        }
        if (null !== $object->getArchitecture()) {
            $data['architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getDownloadUrl()) {
            $data['download_url'] = $object->getDownloadUrl();
        }
        if (null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        return $data;
    }
}