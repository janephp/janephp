<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Document';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Document;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Document();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attributes', $data) && $data['attributes'] !== null) {
            $value = $data['attributes'];
            if (is_array($data['attributes']) && $this->isOnlyNumericKeys($data['attributes'])) {
                $values = array();
                foreach ($data['attributes'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Attributes', 'json', $context);
                }
                $value = $values;
            } elseif (is_null($data['attributes'])) {
                $value = $data['attributes'];
            }
            $object->setAttributes($value);
        }
        elseif (\array_key_exists('attributes', $data) && $data['attributes'] === null) {
            $object->setAttributes(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttributes()) {
            $value = $object->getAttributes();
            if (is_array($object->getAttributes())) {
                $values = array();
                foreach ($object->getAttributes() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (is_null($object->getAttributes())) {
                $value = $object->getAttributes();
            }
            $data['attributes'] = $value;
        }
        return $data;
    }
}