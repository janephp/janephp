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
class OutputResetRetryAttemptsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest';
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
        $object = new \PicturePark\API\Model\OutputResetRetryAttemptsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('outputIds', $data) && $data['outputIds'] !== null) {
            $values = array();
            foreach ($data['outputIds'] as $value) {
                $values[] = $value;
            }
            $object->setOutputIds($values);
        }
        elseif (\array_key_exists('outputIds', $data) && $data['outputIds'] === null) {
            $object->setOutputIds(null);
        }
        if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
            $values_1 = array();
            foreach ($data['contentIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setContentIds($values_1);
        }
        elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
            $object->setContentIds(null);
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
        if (\array_key_exists('includeCompleted', $data)) {
            $object->setIncludeCompleted($data['includeCompleted']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('outputIds') && null !== $object->getOutputIds()) {
            $values = array();
            foreach ($object->getOutputIds() as $value) {
                $values[] = $value;
            }
            $data['outputIds'] = $values;
        }
        if ($object->isInitialized('contentIds') && null !== $object->getContentIds()) {
            $values_1 = array();
            foreach ($object->getContentIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['contentIds'] = $values_1;
        }
        if ($object->isInitialized('fileExtensions') && null !== $object->getFileExtensions()) {
            $values_2 = array();
            foreach ($object->getFileExtensions() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['fileExtensions'] = $values_2;
        }
        if ($object->isInitialized('outputFormatIds') && null !== $object->getOutputFormatIds()) {
            $values_3 = array();
            foreach ($object->getOutputFormatIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['outputFormatIds'] = $values_3;
        }
        $data['includeCompleted'] = $object->getIncludeCompleted();
        return $data;
    }
}