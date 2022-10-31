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
class ShareDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ShareDetail';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareDetail';
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
        $object = new \PicturePark\API\Model\ShareDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
        }
        if (\array_key_exists('audit', $data)) {
            $object->setAudit($data['audit']);
        }
        if (\array_key_exists('contentSelections', $data)) {
            $values = array();
            foreach ($data['contentSelections'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\ShareContentDetail', 'json', $context);
            }
            $object->setContentSelections($values);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_1 = array();
            foreach ($data['layerSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLayerSchemaIds($values_1);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $object->setData($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expirationDate']));
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('expired', $data)) {
            $object->setExpired($data['expired']);
        }
        if (\array_key_exists('outputAccess', $data)) {
            $object->setOutputAccess($data['outputAccess']);
        }
        if (\array_key_exists('shareType', $data)) {
            $object->setShareType($data['shareType']);
        }
        if (\array_key_exists('schemas', $data) && $data['schemas'] !== null) {
            $values_2 = array();
            foreach ($data['schemas'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\SchemaDetail', 'json', $context);
            }
            $object->setSchemas($values_2);
        }
        elseif (\array_key_exists('schemas', $data) && $data['schemas'] === null) {
            $object->setSchemas(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['creator'] = $object->getCreator();
        $data['audit'] = $object->getAudit();
        $values = array();
        foreach ($object->getContentSelections() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['contentSelections'] = $values;
        if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
            $values_1 = array();
            foreach ($object->getLayerSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['layerSchemaIds'] = $values_1;
        }
        if ($object->isInitialized('data') && null !== $object->getData()) {
            $data['data'] = $object->getData();
        }
        if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
            $data['expirationDate'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
        }
        $data['expired'] = $object->getExpired();
        $data['outputAccess'] = $object->getOutputAccess();
        $data['shareType'] = $object->getShareType();
        if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
            $values_2 = array();
            foreach ($object->getSchemas() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['schemas'] = $values_2;
        }
        return $data;
    }
}