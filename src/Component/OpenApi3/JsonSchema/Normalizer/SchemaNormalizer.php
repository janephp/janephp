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
class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Schema;
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
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Schema();
        if (\array_key_exists('multipleOf', $data) && \is_int($data['multipleOf'])) {
            $data['multipleOf'] = (double) $data['multipleOf'];
        }
        if (\array_key_exists('maximum', $data) && \is_int($data['maximum'])) {
            $data['maximum'] = (double) $data['maximum'];
        }
        if (\array_key_exists('minimum', $data) && \is_int($data['minimum'])) {
            $data['minimum'] = (double) $data['minimum'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('multipleOf', $data) && $data['multipleOf'] !== null) {
            $object->setMultipleOf($data['multipleOf']);
            unset($data['multipleOf']);
        }
        elseif (\array_key_exists('multipleOf', $data) && $data['multipleOf'] === null) {
            $object->setMultipleOf(null);
        }
        if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
            $object->setMaximum($data['maximum']);
            unset($data['maximum']);
        }
        elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
            $object->setMaximum(null);
        }
        if (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] !== null) {
            $object->setExclusiveMaximum($data['exclusiveMaximum']);
            unset($data['exclusiveMaximum']);
        }
        elseif (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] === null) {
            $object->setExclusiveMaximum(null);
        }
        if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
            $object->setMinimum($data['minimum']);
            unset($data['minimum']);
        }
        elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
            $object->setMinimum(null);
        }
        if (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] !== null) {
            $object->setExclusiveMinimum($data['exclusiveMinimum']);
            unset($data['exclusiveMinimum']);
        }
        elseif (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] === null) {
            $object->setExclusiveMinimum(null);
        }
        if (\array_key_exists('maxLength', $data) && $data['maxLength'] !== null) {
            $object->setMaxLength($data['maxLength']);
            unset($data['maxLength']);
        }
        elseif (\array_key_exists('maxLength', $data) && $data['maxLength'] === null) {
            $object->setMaxLength(null);
        }
        if (\array_key_exists('minLength', $data) && $data['minLength'] !== null) {
            $object->setMinLength($data['minLength']);
            unset($data['minLength']);
        }
        elseif (\array_key_exists('minLength', $data) && $data['minLength'] === null) {
            $object->setMinLength(null);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
        }
        if (\array_key_exists('maxItems', $data) && $data['maxItems'] !== null) {
            $object->setMaxItems($data['maxItems']);
            unset($data['maxItems']);
        }
        elseif (\array_key_exists('maxItems', $data) && $data['maxItems'] === null) {
            $object->setMaxItems(null);
        }
        if (\array_key_exists('minItems', $data) && $data['minItems'] !== null) {
            $object->setMinItems($data['minItems']);
            unset($data['minItems']);
        }
        elseif (\array_key_exists('minItems', $data) && $data['minItems'] === null) {
            $object->setMinItems(null);
        }
        if (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] !== null) {
            $object->setUniqueItems($data['uniqueItems']);
            unset($data['uniqueItems']);
        }
        elseif (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] === null) {
            $object->setUniqueItems(null);
        }
        if (\array_key_exists('maxProperties', $data) && $data['maxProperties'] !== null) {
            $object->setMaxProperties($data['maxProperties']);
            unset($data['maxProperties']);
        }
        elseif (\array_key_exists('maxProperties', $data) && $data['maxProperties'] === null) {
            $object->setMaxProperties(null);
        }
        if (\array_key_exists('minProperties', $data) && $data['minProperties'] !== null) {
            $object->setMinProperties($data['minProperties']);
            unset($data['minProperties']);
        }
        elseif (\array_key_exists('minProperties', $data) && $data['minProperties'] === null) {
            $object->setMinProperties(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $values = [];
            foreach ($data['required'] as $value) {
                $values[] = $value;
            }
            $object->setRequired($values);
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $values_1 = [];
            foreach ($data['enum'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnum($values_1);
            unset($data['enum']);
        }
        elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->setEnum(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('not', $data) && $data['not'] !== null) {
            $value_2 = $data['not'];
            if (is_array($data['not']) and isset($data['not']['$ref'])) {
                $value_2 = $this->denormalizer->denormalize($data['not'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
            } elseif (is_array($data['not'])) {
                $value_2 = $this->denormalizer->denormalize($data['not'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
            }
            $object->setNot($value_2);
            unset($data['not']);
        }
        elseif (\array_key_exists('not', $data) && $data['not'] === null) {
            $object->setNot(null);
        }
        if (\array_key_exists('allOf', $data) && $data['allOf'] !== null) {
            $values_2 = [];
            foreach ($data['allOf'] as $value_3) {
                $value_4 = $value_3;
                if (is_array($value_3) and isset($value_3['$ref'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_3)) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
                }
                $values_2[] = $value_4;
            }
            $object->setAllOf($values_2);
            unset($data['allOf']);
        }
        elseif (\array_key_exists('allOf', $data) && $data['allOf'] === null) {
            $object->setAllOf(null);
        }
        if (\array_key_exists('oneOf', $data) && $data['oneOf'] !== null) {
            $values_3 = [];
            foreach ($data['oneOf'] as $value_5) {
                $value_6 = $value_5;
                if (is_array($value_5) and isset($value_5['$ref'])) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_5)) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
                }
                $values_3[] = $value_6;
            }
            $object->setOneOf($values_3);
            unset($data['oneOf']);
        }
        elseif (\array_key_exists('oneOf', $data) && $data['oneOf'] === null) {
            $object->setOneOf(null);
        }
        if (\array_key_exists('anyOf', $data) && $data['anyOf'] !== null) {
            $values_4 = [];
            foreach ($data['anyOf'] as $value_7) {
                $value_8 = $value_7;
                if (is_array($value_7) and isset($value_7['$ref'])) {
                    $value_8 = $this->denormalizer->denormalize($value_7, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_7)) {
                    $value_8 = $this->denormalizer->denormalize($value_7, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
                }
                $values_4[] = $value_8;
            }
            $object->setAnyOf($values_4);
            unset($data['anyOf']);
        }
        elseif (\array_key_exists('anyOf', $data) && $data['anyOf'] === null) {
            $object->setAnyOf(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $value_9 = $data['items'];
            if (is_array($data['items']) and isset($data['items']['$ref'])) {
                $value_9 = $this->denormalizer->denormalize($data['items'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
            } elseif (is_array($data['items'])) {
                $value_9 = $this->denormalizer->denormalize($data['items'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
            }
            $object->setItems($value_9);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('properties', $data) && $data['properties'] !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['properties'] as $key => $value_10) {
                $value_11 = $value_10;
                if (is_array($value_10) and isset($value_10['$ref'])) {
                    $value_11 = $this->denormalizer->denormalize($value_10, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_10)) {
                    $value_11 = $this->denormalizer->denormalize($value_10, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
                }
                $values_5[$key] = $value_11;
            }
            $object->setProperties($values_5);
            unset($data['properties']);
        }
        elseif (\array_key_exists('properties', $data) && $data['properties'] === null) {
            $object->setProperties(null);
        }
        if (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] !== null) {
            $value_12 = $data['additionalProperties'];
            if (is_array($data['additionalProperties']) and isset($data['additionalProperties']['$ref'])) {
                $value_12 = $this->denormalizer->denormalize($data['additionalProperties'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
            } elseif (is_array($data['additionalProperties'])) {
                $value_12 = $this->denormalizer->denormalize($data['additionalProperties'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema', 'json', $context);
            } elseif (is_bool($data['additionalProperties'])) {
                $value_12 = $data['additionalProperties'];
            }
            $object->setAdditionalProperties($value_12);
            unset($data['additionalProperties']);
        }
        elseif (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] === null) {
            $object->setAdditionalProperties(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
            unset($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
        }
        if (\array_key_exists('nullable', $data) && $data['nullable'] !== null) {
            $object->setNullable($data['nullable']);
            unset($data['nullable']);
        }
        elseif (\array_key_exists('nullable', $data) && $data['nullable'] === null) {
            $object->setNullable(null);
        }
        if (\array_key_exists('discriminator', $data) && $data['discriminator'] !== null) {
            $object->setDiscriminator($this->denormalizer->denormalize($data['discriminator'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Discriminator', 'json', $context));
            unset($data['discriminator']);
        }
        elseif (\array_key_exists('discriminator', $data) && $data['discriminator'] === null) {
            $object->setDiscriminator(null);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('writeOnly', $data) && $data['writeOnly'] !== null) {
            $object->setWriteOnly($data['writeOnly']);
            unset($data['writeOnly']);
        }
        elseif (\array_key_exists('writeOnly', $data) && $data['writeOnly'] === null) {
            $object->setWriteOnly(null);
        }
        if (\array_key_exists('example', $data) && $data['example'] !== null) {
            $object->setExample($data['example']);
            unset($data['example']);
        }
        elseif (\array_key_exists('example', $data) && $data['example'] === null) {
            $object->setExample(null);
        }
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ExternalDocumentation', 'json', $context));
            unset($data['externalDocs']);
        }
        elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
            unset($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('xml', $data) && $data['xml'] !== null) {
            $object->setXml($this->denormalizer->denormalize($data['xml'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\XML', 'json', $context));
            unset($data['xml']);
        }
        elseif (\array_key_exists('xml', $data) && $data['xml'] === null) {
            $object->setXml(null);
        }
        foreach ($data as $key_1 => $value_13) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $object[$key_1] = $value_13;
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
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('multipleOf') && null !== $object->getMultipleOf()) {
            $data['multipleOf'] = $object->getMultipleOf();
        }
        if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
            $data['maximum'] = $object->getMaximum();
        }
        if ($object->isInitialized('exclusiveMaximum') && null !== $object->getExclusiveMaximum()) {
            $data['exclusiveMaximum'] = $object->getExclusiveMaximum();
        }
        if ($object->isInitialized('minimum') && null !== $object->getMinimum()) {
            $data['minimum'] = $object->getMinimum();
        }
        if ($object->isInitialized('exclusiveMinimum') && null !== $object->getExclusiveMinimum()) {
            $data['exclusiveMinimum'] = $object->getExclusiveMinimum();
        }
        if ($object->isInitialized('maxLength') && null !== $object->getMaxLength()) {
            $data['maxLength'] = $object->getMaxLength();
        }
        if ($object->isInitialized('minLength') && null !== $object->getMinLength()) {
            $data['minLength'] = $object->getMinLength();
        }
        if ($object->isInitialized('pattern') && null !== $object->getPattern()) {
            $data['pattern'] = $object->getPattern();
        }
        if ($object->isInitialized('maxItems') && null !== $object->getMaxItems()) {
            $data['maxItems'] = $object->getMaxItems();
        }
        if ($object->isInitialized('minItems') && null !== $object->getMinItems()) {
            $data['minItems'] = $object->getMinItems();
        }
        if ($object->isInitialized('uniqueItems') && null !== $object->getUniqueItems()) {
            $data['uniqueItems'] = $object->getUniqueItems();
        }
        if ($object->isInitialized('maxProperties') && null !== $object->getMaxProperties()) {
            $data['maxProperties'] = $object->getMaxProperties();
        }
        if ($object->isInitialized('minProperties') && null !== $object->getMinProperties()) {
            $data['minProperties'] = $object->getMinProperties();
        }
        if ($object->isInitialized('required') && null !== $object->getRequired()) {
            $values = [];
            foreach ($object->getRequired() as $value) {
                $values[] = $value;
            }
            $data['required'] = $values;
        }
        if ($object->isInitialized('enum') && null !== $object->getEnum()) {
            $values_1 = [];
            foreach ($object->getEnum() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['enum'] = $values_1;
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('not') && null !== $object->getNot()) {
            $value_2 = $object->getNot();
            if (is_object($object->getNot())) {
                $value_2 = $this->normalizer->normalize($object->getNot(), 'json', $context);
            } elseif (is_object($object->getNot())) {
                $value_2 = $this->normalizer->normalize($object->getNot(), 'json', $context);
            }
            $data['not'] = $value_2;
        }
        if ($object->isInitialized('allOf') && null !== $object->getAllOf()) {
            $values_2 = [];
            foreach ($object->getAllOf() as $value_3) {
                $value_4 = $value_3;
                if (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_2[] = $value_4;
            }
            $data['allOf'] = $values_2;
        }
        if ($object->isInitialized('oneOf') && null !== $object->getOneOf()) {
            $values_3 = [];
            foreach ($object->getOneOf() as $value_5) {
                $value_6 = $value_5;
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                } elseif (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $values_3[] = $value_6;
            }
            $data['oneOf'] = $values_3;
        }
        if ($object->isInitialized('anyOf') && null !== $object->getAnyOf()) {
            $values_4 = [];
            foreach ($object->getAnyOf() as $value_7) {
                $value_8 = $value_7;
                if (is_object($value_7)) {
                    $value_8 = $this->normalizer->normalize($value_7, 'json', $context);
                } elseif (is_object($value_7)) {
                    $value_8 = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $values_4[] = $value_8;
            }
            $data['anyOf'] = $values_4;
        }
        if ($object->isInitialized('items') && null !== $object->getItems()) {
            $value_9 = $object->getItems();
            if (is_object($object->getItems())) {
                $value_9 = $this->normalizer->normalize($object->getItems(), 'json', $context);
            } elseif (is_object($object->getItems())) {
                $value_9 = $this->normalizer->normalize($object->getItems(), 'json', $context);
            }
            $data['items'] = $value_9;
        }
        if ($object->isInitialized('properties') && null !== $object->getProperties()) {
            $values_5 = [];
            foreach ($object->getProperties() as $key => $value_10) {
                $value_11 = $value_10;
                if (is_object($value_10)) {
                    $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                } elseif (is_object($value_10)) {
                    $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $values_5[$key] = $value_11;
            }
            $data['properties'] = $values_5;
        }
        if ($object->isInitialized('additionalProperties') && null !== $object->getAdditionalProperties()) {
            $value_12 = $object->getAdditionalProperties();
            if (is_object($object->getAdditionalProperties())) {
                $value_12 = $this->normalizer->normalize($object->getAdditionalProperties(), 'json', $context);
            } elseif (is_object($object->getAdditionalProperties())) {
                $value_12 = $this->normalizer->normalize($object->getAdditionalProperties(), 'json', $context);
            } elseif (is_bool($object->getAdditionalProperties())) {
                $value_12 = $object->getAdditionalProperties();
            }
            $data['additionalProperties'] = $value_12;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if ($object->isInitialized('default') && null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
        }
        if ($object->isInitialized('nullable') && null !== $object->getNullable()) {
            $data['nullable'] = $object->getNullable();
        }
        if ($object->isInitialized('discriminator') && null !== $object->getDiscriminator()) {
            $data['discriminator'] = $this->normalizer->normalize($object->getDiscriminator(), 'json', $context);
        }
        if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
            $data['readOnly'] = $object->getReadOnly();
        }
        if ($object->isInitialized('writeOnly') && null !== $object->getWriteOnly()) {
            $data['writeOnly'] = $object->getWriteOnly();
        }
        if ($object->isInitialized('example') && null !== $object->getExample()) {
            $data['example'] = $object->getExample();
        }
        if ($object->isInitialized('externalDocs') && null !== $object->getExternalDocs()) {
            $data['externalDocs'] = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if ($object->isInitialized('deprecated') && null !== $object->getDeprecated()) {
            $data['deprecated'] = $object->getDeprecated();
        }
        if ($object->isInitialized('xml') && null !== $object->getXml()) {
            $data['xml'] = $this->normalizer->normalize($object->getXml(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_13) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $data[$key_1] = $value_13;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema' => false];
    }
}