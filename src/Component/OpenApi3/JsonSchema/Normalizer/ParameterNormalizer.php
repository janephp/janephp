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
class ParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Parameter';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Parameter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('in', $data) && $data['in'] !== null) {
            $object->setIn($data['in']);
            unset($data['in']);
        }
        elseif (\array_key_exists('in', $data) && $data['in'] === null) {
            $object->setIn(null);
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
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
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
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['name'] = $object->getName();
        $data['in'] = $object->getIn();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('required') && null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }
        if ($object->isInitialized('deprecated') && null !== $object->getDeprecated()) {
            $data['deprecated'] = $object->getDeprecated();
        }
        if ($object->isInitialized('allowEmptyValue') && null !== $object->getAllowEmptyValue()) {
            $data['allowEmptyValue'] = $object->getAllowEmptyValue();
        }
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $object->getStyle();
        }
        if ($object->isInitialized('explode') && null !== $object->getExplode()) {
            $data['explode'] = $object->getExplode();
        }
        if ($object->isInitialized('allowReserved') && null !== $object->getAllowReserved()) {
            $data['allowReserved'] = $object->getAllowReserved();
        }
        if ($object->isInitialized('schema') && null !== $object->getSchema()) {
            $value = $object->getSchema();
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            } elseif (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            $data['schema'] = $value;
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $values = [];
            foreach ($object->getContent() as $key => $value_1) {
                $values[$key] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['content'] = $values;
        }
        if ($object->isInitialized('example') && null !== $object->getExample()) {
            $data['example'] = $object->getExample();
        }
        if ($object->isInitialized('examples') && null !== $object->getExamples()) {
            $values_1 = [];
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
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Parameter' => false];
    }
}