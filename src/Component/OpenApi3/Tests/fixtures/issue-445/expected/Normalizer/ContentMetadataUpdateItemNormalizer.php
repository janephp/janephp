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
class ContentMetadataUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ContentMetadataUpdateItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentMetadataUpdateItem';
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
        $object = new \PicturePark\API\Model\ContentMetadataUpdateItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = array();
            foreach ($data['layerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setLayerSchemaIds($values);
            unset($data['layerSchemaIds']);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setContent($values_1);
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setMetadata($values_2);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('layerSchemasUpdateOptions', $data)) {
            $object->setLayerSchemasUpdateOptions($data['layerSchemasUpdateOptions']);
            unset($data['layerSchemasUpdateOptions']);
        }
        if (\array_key_exists('layerFieldsUpdateOptions', $data)) {
            $object->setLayerFieldsUpdateOptions($data['layerFieldsUpdateOptions']);
            unset($data['layerFieldsUpdateOptions']);
        }
        if (\array_key_exists('contentFieldsUpdateOptions', $data)) {
            $object->setContentFieldsUpdateOptions($data['contentFieldsUpdateOptions']);
            unset($data['contentFieldsUpdateOptions']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_3;
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
        if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
            $values = array();
            foreach ($object->getLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['layerSchemaIds'] = $values;
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $values_1 = array();
            foreach ($object->getContent() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['content'] = $values_1;
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $values_2 = array();
            foreach ($object->getMetadata() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $data['metadata'] = $values_2;
        }
        $data['layerSchemasUpdateOptions'] = $object->getLayerSchemasUpdateOptions();
        $data['layerFieldsUpdateOptions'] = $object->getLayerFieldsUpdateOptions();
        $data['contentFieldsUpdateOptions'] = $object->getContentFieldsUpdateOptions();
        $data['id'] = $object->getId();
        foreach ($object as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $data[$key_2] = $value_3;
            }
        }
        return $data;
    }
}