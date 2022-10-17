<?php

namespace Jane\Component\OpenApi3\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HeaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Header';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Header;
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
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Header();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
            unset($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('allowEmptyValue', $data) && $data['allowEmptyValue'] !== null) {
            $object->setAllowEmptyValue($data['allowEmptyValue']);
            unset($data['allowEmptyValue']);
        }
        elseif (\array_key_exists('allowEmptyValue', $data) && $data['allowEmptyValue'] === null) {
            $object->setAllowEmptyValue(null);
        }
        if (\array_key_exists('style', $data) && $data['style'] !== null) {
            $object->setStyle($data['style']);
            unset($data['style']);
        }
        elseif (\array_key_exists('style', $data) && $data['style'] === null) {
            $object->setStyle(null);
        }
        if (\array_key_exists('explode', $data) && $data['explode'] !== null) {
            $object->setExplode($data['explode']);
            unset($data['explode']);
        }
        elseif (\array_key_exists('explode', $data) && $data['explode'] === null) {
            $object->setExplode(null);
        }
        if (\array_key_exists('allowReserved', $data) && $data['allowReserved'] !== null) {
            $object->setAllowReserved($data['allowReserved']);
            unset($data['allowReserved']);
        }
        elseif (\array_key_exists('allowReserved', $data) && $data['allowReserved'] === null) {
            $object->setAllowReserved(null);
        }
        if (\array_key_exists('schema', $data) && $data['schema'] !== null) {
            $value = $data['schema'];
            if (is_array($data['schema']) and isset($data['schema']['$ref'])) {
                $value = $this->denormalizer->denormalize($data['schema'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
            } elseif (is_array($data['schema'])) {
                $value = $this->denormalizer->denormalize($data['schema'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
            }
            $object->setSchema($value);
            unset($data['schema']);
        }
        elseif (\array_key_exists('schema', $data) && $data['schema'] === null) {
            $object->setSchema(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key => $value_1) {
                $values[$key] = $this->denormalizer->denormalize($value_1, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\MediaType', 'json', $context);
            }
            $object->setContent($values);
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('example', $data) && $data['example'] !== null) {
            $object->setExample($data['example']);
            unset($data['example']);
        }
        elseif (\array_key_exists('example', $data) && $data['example'] === null) {
            $object->setExample(null);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['examples'] as $key_1 => $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and isset($value_2['$ref'])) {
                    $value_3 = $this->denormalizer->denormalize($value_2, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Example', 'json', $context);
                }
                $values_1[$key_1] = $value_3;
            }
            $object->setExamples($values_1);
            unset($data['examples']);
        }
        elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $object[$key_2] = $value_4;
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
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }
        if (null !== $object->getDeprecated()) {
            $data['deprecated'] = $object->getDeprecated();
        }
        if (null !== $object->getAllowEmptyValue()) {
            $data['allowEmptyValue'] = $object->getAllowEmptyValue();
        }
        if (null !== $object->getStyle()) {
            $data['style'] = $object->getStyle();
        }
        if (null !== $object->getExplode()) {
            $data['explode'] = $object->getExplode();
        }
        if (null !== $object->getAllowReserved()) {
            $data['allowReserved'] = $object->getAllowReserved();
        }
        if (null !== $object->getSchema()) {
            $value = $object->getSchema();
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            } elseif (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            $data['schema'] = $value;
        }
        if (null !== $object->getContent()) {
            $values = array();
            foreach ($object->getContent() as $key => $value_1) {
                $values[$key] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['content'] = $values;
        }
        if (null !== $object->getExample()) {
            $data['example'] = $object->getExample();
        }
        if (null !== $object->getExamples()) {
            $values_1 = array();
            foreach ($object->getExamples() as $key_1 => $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $values_1[$key_1] = $value_3;
            }
            $data['examples'] = $values_1;
        }
        foreach ($object as $key_2 => $value_4) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $data[$key_2] = $value_4;
            }
        }
        return $data;
    }
}