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
class ShareBaseUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ShareBaseUpdateRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareBaseUpdateRequest';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'ShareBasicUpdateRequest' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ShareBasicUpdateRequest', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ShareEmbedUpdateRequest' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ShareEmbedUpdateRequest', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ShareBaseUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expirationDate']));
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('contents', $data)) {
            $values = array();
            foreach ($data['contents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\ShareContent', 'json', $context);
            }
            $object->setContents($values);
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
        if (\array_key_exists('outputAccess', $data)) {
            $object->setOutputAccess($data['outputAccess']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getKind() and 'ShareBasicUpdateRequest' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ShareEmbedUpdateRequest' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        $data['name'] = $object->getName();
        if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
            $data['expirationDate'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $values = array();
        foreach ($object->getContents() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['contents'] = $values;
        if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
            $values_1 = array();
            foreach ($object->getLayerSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['layerSchemaIds'] = $values_1;
        }
        $data['outputAccess'] = $object->getOutputAccess();
        $data['kind'] = $object->getKind();
        return $data;
    }
}