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
class ApiOverviewSshKeyFingerprintsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ApiOverviewSshKeyFingerprints';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ApiOverviewSshKeyFingerprints';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ApiOverviewSshKeyFingerprints();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('MD5_RSA', $data)) {
            $object->setMD5RSA($data['MD5_RSA']);
        }
        if (\array_key_exists('MD5_DSA', $data)) {
            $object->setMD5DSA($data['MD5_DSA']);
        }
        if (\array_key_exists('SHA256_RSA', $data)) {
            $object->setSHA256RSA($data['SHA256_RSA']);
        }
        if (\array_key_exists('SHA256_DSA', $data)) {
            $object->setSHA256DSA($data['SHA256_DSA']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMD5RSA()) {
            $data['MD5_RSA'] = $object->getMD5RSA();
        }
        if (null !== $object->getMD5DSA()) {
            $data['MD5_DSA'] = $object->getMD5DSA();
        }
        if (null !== $object->getSHA256RSA()) {
            $data['SHA256_RSA'] = $object->getSHA256RSA();
        }
        if (null !== $object->getSHA256DSA()) {
            $data['SHA256_DSA'] = $object->getSHA256DSA();
        }
        return $data;
    }
}