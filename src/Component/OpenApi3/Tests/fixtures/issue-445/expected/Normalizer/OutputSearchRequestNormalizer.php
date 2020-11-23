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
class OutputSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\OutputSearchRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputSearchRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\OutputSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
            $values = array();
            foreach ($data['contentIds'] as $value) {
                $values[] = $value;
            }
            $object->setContentIds($values);
        }
        elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
            $object->setContentIds(null);
        }
        if (\array_key_exists('renderingStates', $data) && $data['renderingStates'] !== null) {
            $values_1 = array();
            foreach ($data['renderingStates'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRenderingStates($values_1);
        }
        elseif (\array_key_exists('renderingStates', $data) && $data['renderingStates'] === null) {
            $object->setRenderingStates(null);
        }
        if (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] !== null) {
            $values_2 = array();
            foreach ($data['fileExtensions'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setFileExtensions($values_2);
        }
        elseif (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] === null) {
            $object->setFileExtensions(null);
        }
        if (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] !== null) {
            $values_3 = array();
            foreach ($data['outputFormatIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setOutputFormatIds($values_3);
        }
        elseif (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] === null) {
            $object->setOutputFormatIds(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['limit'] = $object->getLimit();
        if (null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if (null !== $object->getContentIds()) {
            $values = array();
            foreach ($object->getContentIds() as $value) {
                $values[] = $value;
            }
            $data['contentIds'] = $values;
        }
        if (null !== $object->getRenderingStates()) {
            $values_1 = array();
            foreach ($object->getRenderingStates() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['renderingStates'] = $values_1;
        }
        if (null !== $object->getFileExtensions()) {
            $values_2 = array();
            foreach ($object->getFileExtensions() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['fileExtensions'] = $values_2;
        }
        if (null !== $object->getOutputFormatIds()) {
            $values_3 = array();
            foreach ($object->getOutputFormatIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['outputFormatIds'] = $values_3;
        }
        return $data;
    }
}