<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VersionInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\VersionInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VersionInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\VersionInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
            $object->setFileVersion($data['fileVersion']);
        }
        elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
            $object->setFileVersion(null);
        }
        if (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] !== null) {
            $object->setFileProductVersion($data['fileProductVersion']);
        }
        elseif (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] === null) {
            $object->setFileProductVersion(null);
        }
        if (\array_key_exists('contractVersion', $data) && $data['contractVersion'] !== null) {
            $object->setContractVersion($data['contractVersion']);
        }
        elseif (\array_key_exists('contractVersion', $data) && $data['contractVersion'] === null) {
            $object->setContractVersion(null);
        }
        if (\array_key_exists('release', $data) && $data['release'] !== null) {
            $object->setRelease($data['release']);
        }
        elseif (\array_key_exists('release', $data) && $data['release'] === null) {
            $object->setRelease(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFileVersion()) {
            $data['fileVersion'] = $object->getFileVersion();
        }
        if (null !== $object->getFileProductVersion()) {
            $data['fileProductVersion'] = $object->getFileProductVersion();
        }
        if (null !== $object->getContractVersion()) {
            $data['contractVersion'] = $object->getContractVersion();
        }
        if (null !== $object->getRelease()) {
            $data['release'] = $object->getRelease();
        }
        return $data;
    }
}