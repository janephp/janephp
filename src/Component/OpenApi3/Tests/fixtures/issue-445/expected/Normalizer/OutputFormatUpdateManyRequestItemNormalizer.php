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
class OutputFormatUpdateManyRequestItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\OutputFormatUpdateManyRequestItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputFormatUpdateManyRequestItem';
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
        $object = new \PicturePark\API\Model\OutputFormatUpdateManyRequestItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] !== null) {
            $object->setSourceOutputFormats($data['sourceOutputFormats']);
        }
        elseif (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] === null) {
            $object->setSourceOutputFormats(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('names', $data)) {
            $object->setNames($data['names']);
        }
        if (\array_key_exists('retentionTime', $data)) {
            $object->setRetentionTime($data['retentionTime']);
        }
        if (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] !== null) {
            $object->setDownloadFileNamePatterns($data['downloadFileNamePatterns']);
        }
        elseif (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] === null) {
            $object->setDownloadFileNamePatterns(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        if (\array_key_exists('enableXmpWriteback', $data)) {
            $object->setEnableXmpWriteback($data['enableXmpWriteback']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSourceOutputFormats()) {
            $data['sourceOutputFormats'] = $object->getSourceOutputFormats();
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        $data['names'] = $object->getNames();
        if (null !== $object->getRetentionTime()) {
            $data['retentionTime'] = $object->getRetentionTime();
        }
        if (null !== $object->getDownloadFileNamePatterns()) {
            $data['downloadFileNamePatterns'] = $object->getDownloadFileNamePatterns();
        }
        if (null !== $object->getViewForAll()) {
            $data['viewForAll'] = $object->getViewForAll();
        }
        if (null !== $object->getEnableXmpWriteback()) {
            $data['enableXmpWriteback'] = $object->getEnableXmpWriteback();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        return $data;
    }
}