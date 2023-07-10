<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DownloadTrackingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\DownloadTrackingInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DownloadTrackingInfo';
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
        $object = new \PicturePark\API\Model\DownloadTrackingInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->setContentId($data['contentId']);
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->setContentId(null);
        }
        if (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] !== null) {
            $object->setOutputFormatId($data['outputFormatId']);
        }
        elseif (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] === null) {
            $object->setOutputFormatId(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('contentDisposition', $data)) {
            $object->setContentDisposition($data['contentDisposition']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
            $data['contentId'] = $object->getContentId();
        }
        if ($object->isInitialized('outputFormatId') && null !== $object->getOutputFormatId()) {
            $data['outputFormatId'] = $object->getOutputFormatId();
        }
        if ($object->isInitialized('width') && null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }
        if ($object->isInitialized('height') && null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        $data['contentDisposition'] = $object->getContentDisposition();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\DownloadTrackingInfo' => false);
    }
}