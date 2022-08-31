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
class MetadataValuesChangeCommandBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\MetadataValuesChangeCommandBase';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\MetadataValuesChangeCommandBase';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaUpdateCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesSchemaUpdateCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaUpsertCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesSchemaUpsertCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaRemoveCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesSchemaRemoveCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaReplaceCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesSchemaReplaceCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesFieldRemoveCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesFieldRemoveCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaItemAddCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesSchemaItemAddCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaItemRemoveCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MetadataValuesSchemaItemRemoveCommand', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\MetadataValuesChangeCommandBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemaId', $data)) {
            $object->setSchemaId($data['schemaId']);
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
        if (null !== $object->getKind() and 'MetadataValuesSchemaUpdateCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MetadataValuesSchemaUpsertCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MetadataValuesSchemaRemoveCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MetadataValuesSchemaReplaceCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MetadataValuesFieldRemoveCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MetadataValuesSchemaItemAddCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MetadataValuesSchemaItemRemoveCommand' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        $data['schemaId'] = $object->getSchemaId();
        $data['kind'] = $object->getKind();
        return $data;
    }
}