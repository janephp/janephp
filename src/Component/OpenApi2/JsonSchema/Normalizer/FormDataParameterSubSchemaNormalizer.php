<?php

namespace Jane\Component\OpenApi2\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FormDataParameterSubSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema();
        if (\array_key_exists('maximum', $data) && \is_int($data['maximum'])) {
            $data['maximum'] = (double) $data['maximum'];
        }
        if (\array_key_exists('minimum', $data) && \is_int($data['minimum'])) {
            $data['minimum'] = (double) $data['minimum'];
        }
        if (\array_key_exists('multipleOf', $data) && \is_int($data['multipleOf'])) {
            $data['multipleOf'] = (double) $data['multipleOf'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
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
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('allowEmptyValue', $data) && $data['allowEmptyValue'] !== null) {
            $object->setAllowEmptyValue($data['allowEmptyValue']);
            unset($data['allowEmptyValue']);
        }
        elseif (\array_key_exists('allowEmptyValue', $data) && $data['allowEmptyValue'] === null) {
            $object->setAllowEmptyValue(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $object->setItems($this->denormalizer->denormalize($data['items'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PrimitivesItems', 'json', $context));
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('collectionFormat', $data) && $data['collectionFormat'] !== null) {
            $object->setCollectionFormat($data['collectionFormat']);
            unset($data['collectionFormat']);
        }
        elseif (\array_key_exists('collectionFormat', $data) && $data['collectionFormat'] === null) {
            $object->setCollectionFormat(null);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
            unset($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
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
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $values = [];
            foreach ($data['enum'] as $value) {
                $values[] = $value;
            }
            $object->setEnum($values);
            unset($data['enum']);
        }
        elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->setEnum(null);
        }
        if (\array_key_exists('multipleOf', $data) && $data['multipleOf'] !== null) {
            $object->setMultipleOf($data['multipleOf']);
            unset($data['multipleOf']);
        }
        elseif (\array_key_exists('multipleOf', $data) && $data['multipleOf'] === null) {
            $object->setMultipleOf(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if ($object->isInitialized('required') && null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }
        $data['in'] = $object->getIn();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['name'] = $object->getName();
        if ($object->isInitialized('allowEmptyValue') && null !== $object->getAllowEmptyValue()) {
            $data['allowEmptyValue'] = $object->getAllowEmptyValue();
        }
        $data['type'] = $object->getType();
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if ($object->isInitialized('items') && null !== $object->getItems()) {
            $data['items'] = $this->normalizer->normalize($object->getItems(), 'json', $context);
        }
        if ($object->isInitialized('collectionFormat') && null !== $object->getCollectionFormat()) {
            $data['collectionFormat'] = $object->getCollectionFormat();
        }
        if ($object->isInitialized('default') && null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
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
        if ($object->isInitialized('enum') && null !== $object->getEnum()) {
            $values = [];
            foreach ($object->getEnum() as $value) {
                $values[] = $value;
            }
            $data['enum'] = $values;
        }
        if ($object->isInitialized('multipleOf') && null !== $object->getMultipleOf()) {
            $data['multipleOf'] = $object->getMultipleOf();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/^x-/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema' => false];
    }
}