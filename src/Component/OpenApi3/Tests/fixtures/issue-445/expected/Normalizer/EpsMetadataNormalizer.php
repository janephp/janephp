<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EpsMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\EpsMetadata';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\EpsMetadata';
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
        $object = new \PicturePark\API\Model\EpsMetadata();
        if (\array_key_exists('widthInPoints', $data) && \is_int($data['widthInPoints'])) {
            $data['widthInPoints'] = (double) $data['widthInPoints'];
        }
        if (\array_key_exists('heightInPoints', $data) && \is_int($data['heightInPoints'])) {
            $data['heightInPoints'] = (double) $data['heightInPoints'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isRasterized', $data)) {
            $object->setIsRasterized($data['isRasterized']);
        }
        if (\array_key_exists('widthInPoints', $data)) {
            $object->setWidthInPoints($data['widthInPoints']);
        }
        if (\array_key_exists('heightInPoints', $data)) {
            $object->setHeightInPoints($data['heightInPoints']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['isRasterized'] = $object->getIsRasterized();
        $data['widthInPoints'] = $object->getWidthInPoints();
        $data['heightInPoints'] = $object->getHeightInPoints();
        return $data;
    }
}