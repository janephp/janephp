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
class ContentFieldsBatchUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ContentFieldsBatchUpdateRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentFieldsBatchUpdateRequest';
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
        $object = new \PicturePark\API\Model\ContentFieldsBatchUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('changeCommands', $data)) {
            $values = array();
            foreach ($data['changeCommands'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\MetadataValuesChangeCommandBase', 'json', $context);
            }
            $object->setChangeCommands($values);
            unset($data['changeCommands']);
        }
        if (\array_key_exists('allowMissingDependencies', $data)) {
            $object->setAllowMissingDependencies($data['allowMissingDependencies']);
            unset($data['allowMissingDependencies']);
        }
        if (\array_key_exists('notifyProgress', $data)) {
            $object->setNotifyProgress($data['notifyProgress']);
            unset($data['notifyProgress']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('contentIds', $data)) {
            $values_1 = array();
            foreach ($data['contentIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setContentIds($values_1);
            unset($data['contentIds']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $values = array();
        foreach ($object->getChangeCommands() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['changeCommands'] = $values;
        $data['allowMissingDependencies'] = $object->getAllowMissingDependencies();
        $data['notifyProgress'] = $object->getNotifyProgress();
        $data['kind'] = $object->getKind();
        $values_1 = array();
        foreach ($object->getContentIds() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['contentIds'] = $values_1;
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}