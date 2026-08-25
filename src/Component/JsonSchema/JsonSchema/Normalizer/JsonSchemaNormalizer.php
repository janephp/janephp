<?php

namespace Jane\Component\JsonSchema\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JsonSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('multipleOf', $data) && \is_int($data['multipleOf'])) {
            $data['multipleOf'] = (float) $data['multipleOf'];
        }
        if (\array_key_exists('maximum', $data) && \is_int($data['maximum'])) {
            $data['maximum'] = (float) $data['maximum'];
        }
        if (\array_key_exists('exclusiveMaximum', $data) && \is_int($data['exclusiveMaximum'])) {
            $data['exclusiveMaximum'] = (float) $data['exclusiveMaximum'];
        }
        if (\array_key_exists('minimum', $data) && \is_int($data['minimum'])) {
            $data['minimum'] = (float) $data['minimum'];
        }
        if (\array_key_exists('exclusiveMinimum', $data) && \is_int($data['exclusiveMinimum'])) {
            $data['exclusiveMinimum'] = (float) $data['exclusiveMinimum'];
        }
        if (\array_key_exists('uniqueItems', $data) && \is_int($data['uniqueItems'])) {
            $data['uniqueItems'] = (bool) $data['uniqueItems'];
        }
        if (\array_key_exists('deprecated', $data) && \is_int($data['deprecated'])) {
            $data['deprecated'] = (bool) $data['deprecated'];
        }
        if (\array_key_exists('readOnly', $data) && \is_int($data['readOnly'])) {
            $data['readOnly'] = (bool) $data['readOnly'];
        }
        if (\array_key_exists('writeOnly', $data) && \is_int($data['writeOnly'])) {
            $data['writeOnly'] = (bool) $data['writeOnly'];
        }
        if (\array_key_exists('$recursiveAnchor', $data) && \is_int($data['$recursiveAnchor'])) {
            $data['$recursiveAnchor'] = (bool) $data['$recursiveAnchor'];
        }
        if (\array_key_exists('$id', $data) && $data['$id'] !== null) {
            $object->setDollarId($data['$id']);
            unset($data['$id']);
        }
        elseif (\array_key_exists('$id', $data) && $data['$id'] === null) {
            $object->setDollarId(null);
            unset($data['$id']);
        }
        if (\array_key_exists('$schema', $data) && $data['$schema'] !== null) {
            $object->setDollarSchema($data['$schema']);
            unset($data['$schema']);
        }
        elseif (\array_key_exists('$schema', $data) && $data['$schema'] === null) {
            $object->setDollarSchema(null);
            unset($data['$schema']);
        }
        if (\array_key_exists('$ref', $data) && $data['$ref'] !== null) {
            $object->setDollarRef($data['$ref']);
            unset($data['$ref']);
        }
        elseif (\array_key_exists('$ref', $data) && $data['$ref'] === null) {
            $object->setDollarRef(null);
            unset($data['$ref']);
        }
        if (\array_key_exists('$anchor', $data) && $data['$anchor'] !== null) {
            $object->setDollarAnchor($data['$anchor']);
            unset($data['$anchor']);
        }
        elseif (\array_key_exists('$anchor', $data) && $data['$anchor'] === null) {
            $object->setDollarAnchor(null);
            unset($data['$anchor']);
        }
        if (\array_key_exists('$dynamicRef', $data) && $data['$dynamicRef'] !== null) {
            $object->setDollarDynamicRef($data['$dynamicRef']);
            unset($data['$dynamicRef']);
        }
        elseif (\array_key_exists('$dynamicRef', $data) && $data['$dynamicRef'] === null) {
            $object->setDollarDynamicRef(null);
            unset($data['$dynamicRef']);
        }
        if (\array_key_exists('$dynamicAnchor', $data) && $data['$dynamicAnchor'] !== null) {
            $object->setDollarDynamicAnchor($data['$dynamicAnchor']);
            unset($data['$dynamicAnchor']);
        }
        elseif (\array_key_exists('$dynamicAnchor', $data) && $data['$dynamicAnchor'] === null) {
            $object->setDollarDynamicAnchor(null);
            unset($data['$dynamicAnchor']);
        }
        if (\array_key_exists('$vocabulary', $data) && $data['$vocabulary'] !== null) {
            $values = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['$vocabulary'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setDollarVocabulary($values);
            unset($data['$vocabulary']);
        }
        elseif (\array_key_exists('$vocabulary', $data) && $data['$vocabulary'] === null) {
            $object->setDollarVocabulary(null);
            unset($data['$vocabulary']);
        }
        if (\array_key_exists('$comment', $data) && $data['$comment'] !== null) {
            $object->setDollarComment($data['$comment']);
            unset($data['$comment']);
        }
        elseif (\array_key_exists('$comment', $data) && $data['$comment'] === null) {
            $object->setDollarComment(null);
            unset($data['$comment']);
        }
        if (\array_key_exists('$defs', $data) && $data['$defs'] !== null) {
            $values_1 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['$defs'] as $key_1 => $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1)) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_1)) {
                    $value_2 = $value_1;
                }
                $values_1[$key_1] = $value_2;
            }
            $object->setDollarDefs($values_1);
            unset($data['$defs']);
        }
        elseif (\array_key_exists('$defs', $data) && $data['$defs'] === null) {
            $object->setDollarDefs(null);
            unset($data['$defs']);
        }
        if (\array_key_exists('prefixItems', $data) && $data['prefixItems'] !== null) {
            $values_2 = [];
            foreach ($data['prefixItems'] as $value_3) {
                $value_4 = $value_3;
                if (is_array($value_3)) {
                    $value_4 = $this->denormalizer->denormalize($value_3, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_3)) {
                    $value_4 = $value_3;
                }
                $values_2[] = $value_4;
            }
            $object->setPrefixItems($values_2);
            unset($data['prefixItems']);
        }
        elseif (\array_key_exists('prefixItems', $data) && $data['prefixItems'] === null) {
            $object->setPrefixItems(null);
            unset($data['prefixItems']);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $value_5 = $data['items'];
            if (is_array($data['items'])) {
                $value_5 = $this->denormalizer->denormalize($data['items'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['items'])) {
                $value_5 = $data['items'];
            } elseif (is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values_3 = [];
                foreach ($data['items'] as $value_6) {
                    $value_7 = $value_6;
                    if (is_array($value_6)) {
                        $value_7 = $this->denormalizer->denormalize($value_6, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                    } elseif (is_bool($value_6)) {
                        $value_7 = $value_6;
                    }
                    $values_3[] = $value_7;
                }
                $value_5 = $values_3;
            }
            $object->setItems($value_5);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
            unset($data['items']);
        }
        if (\array_key_exists('contains', $data) && $data['contains'] !== null) {
            $value_8 = $data['contains'];
            if (is_array($data['contains'])) {
                $value_8 = $this->denormalizer->denormalize($data['contains'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['contains'])) {
                $value_8 = $data['contains'];
            }
            $object->setContains($value_8);
            unset($data['contains']);
        }
        elseif (\array_key_exists('contains', $data) && $data['contains'] === null) {
            $object->setContains(null);
            unset($data['contains']);
        }
        if (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] !== null) {
            $value_9 = $data['additionalProperties'];
            if (is_array($data['additionalProperties'])) {
                $value_9 = $this->denormalizer->denormalize($data['additionalProperties'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['additionalProperties'])) {
                $value_9 = $data['additionalProperties'];
            }
            $object->setAdditionalProperties($value_9);
            unset($data['additionalProperties']);
        }
        elseif (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] === null) {
            $object->setAdditionalProperties(null);
            unset($data['additionalProperties']);
        }
        if (\array_key_exists('properties', $data) && $data['properties'] !== null) {
            $values_4 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['properties'] as $key_2 => $value_10) {
                $value_11 = $value_10;
                if (is_array($value_10)) {
                    $value_11 = $this->denormalizer->denormalize($value_10, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_10)) {
                    $value_11 = $value_10;
                }
                $values_4[$key_2] = $value_11;
            }
            $object->setProperties($values_4);
            unset($data['properties']);
        }
        elseif (\array_key_exists('properties', $data) && $data['properties'] === null) {
            $object->setProperties(null);
            unset($data['properties']);
        }
        if (\array_key_exists('patternProperties', $data) && $data['patternProperties'] !== null) {
            $values_5 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['patternProperties'] as $key_3 => $value_12) {
                $value_13 = $value_12;
                if (is_array($value_12)) {
                    $value_13 = $this->denormalizer->denormalize($value_12, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_12)) {
                    $value_13 = $value_12;
                }
                $values_5[$key_3] = $value_13;
            }
            $object->setPatternProperties($values_5);
            unset($data['patternProperties']);
        }
        elseif (\array_key_exists('patternProperties', $data) && $data['patternProperties'] === null) {
            $object->setPatternProperties(null);
            unset($data['patternProperties']);
        }
        if (\array_key_exists('dependentSchemas', $data) && $data['dependentSchemas'] !== null) {
            $values_6 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['dependentSchemas'] as $key_4 => $value_14) {
                $value_15 = $value_14;
                if (is_array($value_14)) {
                    $value_15 = $this->denormalizer->denormalize($value_14, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_14)) {
                    $value_15 = $value_14;
                }
                $values_6[$key_4] = $value_15;
            }
            $object->setDependentSchemas($values_6);
            unset($data['dependentSchemas']);
        }
        elseif (\array_key_exists('dependentSchemas', $data) && $data['dependentSchemas'] === null) {
            $object->setDependentSchemas(null);
            unset($data['dependentSchemas']);
        }
        if (\array_key_exists('propertyNames', $data) && $data['propertyNames'] !== null) {
            $value_16 = $data['propertyNames'];
            if (is_array($data['propertyNames'])) {
                $value_16 = $this->denormalizer->denormalize($data['propertyNames'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['propertyNames'])) {
                $value_16 = $data['propertyNames'];
            }
            $object->setPropertyNames($value_16);
            unset($data['propertyNames']);
        }
        elseif (\array_key_exists('propertyNames', $data) && $data['propertyNames'] === null) {
            $object->setPropertyNames(null);
            unset($data['propertyNames']);
        }
        if (\array_key_exists('if', $data) && $data['if'] !== null) {
            $value_17 = $data['if'];
            if (is_array($data['if'])) {
                $value_17 = $this->denormalizer->denormalize($data['if'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['if'])) {
                $value_17 = $data['if'];
            }
            $object->setIf($value_17);
            unset($data['if']);
        }
        elseif (\array_key_exists('if', $data) && $data['if'] === null) {
            $object->setIf(null);
            unset($data['if']);
        }
        if (\array_key_exists('then', $data) && $data['then'] !== null) {
            $value_18 = $data['then'];
            if (is_array($data['then'])) {
                $value_18 = $this->denormalizer->denormalize($data['then'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['then'])) {
                $value_18 = $data['then'];
            }
            $object->setThen($value_18);
            unset($data['then']);
        }
        elseif (\array_key_exists('then', $data) && $data['then'] === null) {
            $object->setThen(null);
            unset($data['then']);
        }
        if (\array_key_exists('else', $data) && $data['else'] !== null) {
            $value_19 = $data['else'];
            if (is_array($data['else'])) {
                $value_19 = $this->denormalizer->denormalize($data['else'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['else'])) {
                $value_19 = $data['else'];
            }
            $object->setElse($value_19);
            unset($data['else']);
        }
        elseif (\array_key_exists('else', $data) && $data['else'] === null) {
            $object->setElse(null);
            unset($data['else']);
        }
        if (\array_key_exists('allOf', $data) && $data['allOf'] !== null) {
            $values_7 = [];
            foreach ($data['allOf'] as $value_20) {
                $value_21 = $value_20;
                if (is_array($value_20)) {
                    $value_21 = $this->denormalizer->denormalize($value_20, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_20)) {
                    $value_21 = $value_20;
                }
                $values_7[] = $value_21;
            }
            $object->setAllOf($values_7);
            unset($data['allOf']);
        }
        elseif (\array_key_exists('allOf', $data) && $data['allOf'] === null) {
            $object->setAllOf(null);
            unset($data['allOf']);
        }
        if (\array_key_exists('anyOf', $data) && $data['anyOf'] !== null) {
            $values_8 = [];
            foreach ($data['anyOf'] as $value_22) {
                $value_23 = $value_22;
                if (is_array($value_22)) {
                    $value_23 = $this->denormalizer->denormalize($value_22, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_22)) {
                    $value_23 = $value_22;
                }
                $values_8[] = $value_23;
            }
            $object->setAnyOf($values_8);
            unset($data['anyOf']);
        }
        elseif (\array_key_exists('anyOf', $data) && $data['anyOf'] === null) {
            $object->setAnyOf(null);
            unset($data['anyOf']);
        }
        if (\array_key_exists('oneOf', $data) && $data['oneOf'] !== null) {
            $values_9 = [];
            foreach ($data['oneOf'] as $value_24) {
                $value_25 = $value_24;
                if (is_array($value_24)) {
                    $value_25 = $this->denormalizer->denormalize($value_24, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_24)) {
                    $value_25 = $value_24;
                }
                $values_9[] = $value_25;
            }
            $object->setOneOf($values_9);
            unset($data['oneOf']);
        }
        elseif (\array_key_exists('oneOf', $data) && $data['oneOf'] === null) {
            $object->setOneOf(null);
            unset($data['oneOf']);
        }
        if (\array_key_exists('not', $data) && $data['not'] !== null) {
            $value_26 = $data['not'];
            if (is_array($data['not'])) {
                $value_26 = $this->denormalizer->denormalize($data['not'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['not'])) {
                $value_26 = $data['not'];
            }
            $object->setNot($value_26);
            unset($data['not']);
        }
        elseif (\array_key_exists('not', $data) && $data['not'] === null) {
            $object->setNot(null);
            unset($data['not']);
        }
        if (\array_key_exists('unevaluatedItems', $data) && $data['unevaluatedItems'] !== null) {
            $value_27 = $data['unevaluatedItems'];
            if (is_array($data['unevaluatedItems'])) {
                $value_27 = $this->denormalizer->denormalize($data['unevaluatedItems'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['unevaluatedItems'])) {
                $value_27 = $data['unevaluatedItems'];
            }
            $object->setUnevaluatedItems($value_27);
            unset($data['unevaluatedItems']);
        }
        elseif (\array_key_exists('unevaluatedItems', $data) && $data['unevaluatedItems'] === null) {
            $object->setUnevaluatedItems(null);
            unset($data['unevaluatedItems']);
        }
        if (\array_key_exists('unevaluatedProperties', $data) && $data['unevaluatedProperties'] !== null) {
            $value_28 = $data['unevaluatedProperties'];
            if (is_array($data['unevaluatedProperties'])) {
                $value_28 = $this->denormalizer->denormalize($data['unevaluatedProperties'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['unevaluatedProperties'])) {
                $value_28 = $data['unevaluatedProperties'];
            }
            $object->setUnevaluatedProperties($value_28);
            unset($data['unevaluatedProperties']);
        }
        elseif (\array_key_exists('unevaluatedProperties', $data) && $data['unevaluatedProperties'] === null) {
            $object->setUnevaluatedProperties(null);
            unset($data['unevaluatedProperties']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $value_29 = $data['type'];
            if (is_array($data['type']) && $this->isOnlyNumericKeys($data['type'])) {
                $values_10 = [];
                foreach ($data['type'] as $value_30) {
                    $values_10[] = $value_30;
                }
                $value_29 = $values_10;
            } elseif (isset($data['type'])) {
                $value_29 = $data['type'];
            }
            $object->setType($value_29);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('const', $data) && $data['const'] !== null) {
            $object->setConst($data['const']);
            unset($data['const']);
        }
        elseif (\array_key_exists('const', $data) && $data['const'] === null) {
            $object->setConst(null);
            unset($data['const']);
        }
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $values_11 = [];
            foreach ($data['enum'] as $value_31) {
                $values_11[] = $value_31;
            }
            $object->setEnum($values_11);
            unset($data['enum']);
        }
        elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->setEnum(null);
            unset($data['enum']);
        }
        if (\array_key_exists('multipleOf', $data) && $data['multipleOf'] !== null) {
            $object->setMultipleOf($data['multipleOf']);
            unset($data['multipleOf']);
        }
        elseif (\array_key_exists('multipleOf', $data) && $data['multipleOf'] === null) {
            $object->setMultipleOf(null);
            unset($data['multipleOf']);
        }
        if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
            $object->setMaximum($data['maximum']);
            unset($data['maximum']);
        }
        elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
            $object->setMaximum(null);
            unset($data['maximum']);
        }
        if (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] !== null) {
            $object->setExclusiveMaximum($data['exclusiveMaximum']);
            unset($data['exclusiveMaximum']);
        }
        elseif (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] === null) {
            $object->setExclusiveMaximum(null);
            unset($data['exclusiveMaximum']);
        }
        if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
            $object->setMinimum($data['minimum']);
            unset($data['minimum']);
        }
        elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
            $object->setMinimum(null);
            unset($data['minimum']);
        }
        if (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] !== null) {
            $object->setExclusiveMinimum($data['exclusiveMinimum']);
            unset($data['exclusiveMinimum']);
        }
        elseif (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] === null) {
            $object->setExclusiveMinimum(null);
            unset($data['exclusiveMinimum']);
        }
        if (\array_key_exists('maxLength', $data) && $data['maxLength'] !== null) {
            $object->setMaxLength($data['maxLength']);
            unset($data['maxLength']);
        }
        elseif (\array_key_exists('maxLength', $data) && $data['maxLength'] === null) {
            $object->setMaxLength(null);
            unset($data['maxLength']);
        }
        if (\array_key_exists('minLength', $data) && $data['minLength'] !== null) {
            $object->setMinLength($data['minLength']);
            unset($data['minLength']);
        }
        elseif (\array_key_exists('minLength', $data) && $data['minLength'] === null) {
            $object->setMinLength(null);
            unset($data['minLength']);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
            unset($data['pattern']);
        }
        if (\array_key_exists('maxItems', $data) && $data['maxItems'] !== null) {
            $object->setMaxItems($data['maxItems']);
            unset($data['maxItems']);
        }
        elseif (\array_key_exists('maxItems', $data) && $data['maxItems'] === null) {
            $object->setMaxItems(null);
            unset($data['maxItems']);
        }
        if (\array_key_exists('minItems', $data) && $data['minItems'] !== null) {
            $object->setMinItems($data['minItems']);
            unset($data['minItems']);
        }
        elseif (\array_key_exists('minItems', $data) && $data['minItems'] === null) {
            $object->setMinItems(null);
            unset($data['minItems']);
        }
        if (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] !== null) {
            $object->setUniqueItems($data['uniqueItems']);
            unset($data['uniqueItems']);
        }
        elseif (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] === null) {
            $object->setUniqueItems(null);
            unset($data['uniqueItems']);
        }
        if (\array_key_exists('maxContains', $data) && $data['maxContains'] !== null) {
            $object->setMaxContains($data['maxContains']);
            unset($data['maxContains']);
        }
        elseif (\array_key_exists('maxContains', $data) && $data['maxContains'] === null) {
            $object->setMaxContains(null);
            unset($data['maxContains']);
        }
        if (\array_key_exists('minContains', $data) && $data['minContains'] !== null) {
            $object->setMinContains($data['minContains']);
            unset($data['minContains']);
        }
        elseif (\array_key_exists('minContains', $data) && $data['minContains'] === null) {
            $object->setMinContains(null);
            unset($data['minContains']);
        }
        if (\array_key_exists('maxProperties', $data) && $data['maxProperties'] !== null) {
            $object->setMaxProperties($data['maxProperties']);
            unset($data['maxProperties']);
        }
        elseif (\array_key_exists('maxProperties', $data) && $data['maxProperties'] === null) {
            $object->setMaxProperties(null);
            unset($data['maxProperties']);
        }
        if (\array_key_exists('minProperties', $data) && $data['minProperties'] !== null) {
            $object->setMinProperties($data['minProperties']);
            unset($data['minProperties']);
        }
        elseif (\array_key_exists('minProperties', $data) && $data['minProperties'] === null) {
            $object->setMinProperties(null);
            unset($data['minProperties']);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $values_12 = [];
            foreach ($data['required'] as $value_32) {
                $values_12[] = $value_32;
            }
            $object->setRequired($values_12);
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
            unset($data['required']);
        }
        if (\array_key_exists('dependentRequired', $data) && $data['dependentRequired'] !== null) {
            $values_13 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['dependentRequired'] as $key_5 => $value_33) {
                $values_14 = [];
                foreach ($value_33 as $value_34) {
                    $values_14[] = $value_34;
                }
                $values_13[$key_5] = $values_14;
            }
            $object->setDependentRequired($values_13);
            unset($data['dependentRequired']);
        }
        elseif (\array_key_exists('dependentRequired', $data) && $data['dependentRequired'] === null) {
            $object->setDependentRequired(null);
            unset($data['dependentRequired']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
            unset($data['title']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
            unset($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
            unset($data['default']);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
            unset($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
            unset($data['deprecated']);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
            unset($data['readOnly']);
        }
        if (\array_key_exists('writeOnly', $data) && $data['writeOnly'] !== null) {
            $object->setWriteOnly($data['writeOnly']);
            unset($data['writeOnly']);
        }
        elseif (\array_key_exists('writeOnly', $data) && $data['writeOnly'] === null) {
            $object->setWriteOnly(null);
            unset($data['writeOnly']);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values_15 = [];
            foreach ($data['examples'] as $value_35) {
                $values_15[] = $value_35;
            }
            $object->setExamples($values_15);
            unset($data['examples']);
        }
        elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
            unset($data['examples']);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
            unset($data['format']);
        }
        if (\array_key_exists('contentEncoding', $data) && $data['contentEncoding'] !== null) {
            $object->setContentEncoding($data['contentEncoding']);
            unset($data['contentEncoding']);
        }
        elseif (\array_key_exists('contentEncoding', $data) && $data['contentEncoding'] === null) {
            $object->setContentEncoding(null);
            unset($data['contentEncoding']);
        }
        if (\array_key_exists('contentMediaType', $data) && $data['contentMediaType'] !== null) {
            $object->setContentMediaType($data['contentMediaType']);
            unset($data['contentMediaType']);
        }
        elseif (\array_key_exists('contentMediaType', $data) && $data['contentMediaType'] === null) {
            $object->setContentMediaType(null);
            unset($data['contentMediaType']);
        }
        if (\array_key_exists('contentSchema', $data) && $data['contentSchema'] !== null) {
            $value_36 = $data['contentSchema'];
            if (is_array($data['contentSchema'])) {
                $value_36 = $this->denormalizer->denormalize($data['contentSchema'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['contentSchema'])) {
                $value_36 = $data['contentSchema'];
            }
            $object->setContentSchema($value_36);
            unset($data['contentSchema']);
        }
        elseif (\array_key_exists('contentSchema', $data) && $data['contentSchema'] === null) {
            $object->setContentSchema(null);
            unset($data['contentSchema']);
        }
        if (\array_key_exists('definitions', $data) && $data['definitions'] !== null) {
            $values_16 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['definitions'] as $key_6 => $value_37) {
                $value_38 = $value_37;
                if (is_array($value_37)) {
                    $value_38 = $this->denormalizer->denormalize($value_37, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_37)) {
                    $value_38 = $value_37;
                }
                $values_16[$key_6] = $value_38;
            }
            $object->setDefinitions($values_16);
            unset($data['definitions']);
        }
        elseif (\array_key_exists('definitions', $data) && $data['definitions'] === null) {
            $object->setDefinitions(null);
            unset($data['definitions']);
        }
        if (\array_key_exists('dependencies', $data) && $data['dependencies'] !== null) {
            $values_17 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['dependencies'] as $key_7 => $value_39) {
                $value_40 = $value_39;
                if (is_array($value_39)) {
                    $value_40 = $this->denormalizer->denormalize($value_39, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_39)) {
                    $value_40 = $value_39;
                } elseif (is_array($value_39) && $this->isOnlyNumericKeys($value_39)) {
                    $values_18 = [];
                    foreach ($value_39 as $value_41) {
                        $values_18[] = $value_41;
                    }
                    $value_40 = $values_18;
                }
                $values_17[$key_7] = $value_40;
            }
            $object->setDependencies($values_17);
            unset($data['dependencies']);
        }
        elseif (\array_key_exists('dependencies', $data) && $data['dependencies'] === null) {
            $object->setDependencies(null);
            unset($data['dependencies']);
        }
        if (\array_key_exists('$recursiveAnchor', $data) && $data['$recursiveAnchor'] !== null) {
            $object->setDollarRecursiveAnchor($data['$recursiveAnchor']);
            unset($data['$recursiveAnchor']);
        }
        elseif (\array_key_exists('$recursiveAnchor', $data) && $data['$recursiveAnchor'] === null) {
            $object->setDollarRecursiveAnchor(null);
            unset($data['$recursiveAnchor']);
        }
        if (\array_key_exists('$recursiveRef', $data) && $data['$recursiveRef'] !== null) {
            $object->setDollarRecursiveRef($data['$recursiveRef']);
            unset($data['$recursiveRef']);
        }
        elseif (\array_key_exists('$recursiveRef', $data) && $data['$recursiveRef'] === null) {
            $object->setDollarRecursiveRef(null);
            unset($data['$recursiveRef']);
        }
        if (\array_key_exists('additionalItems', $data) && $data['additionalItems'] !== null) {
            $value_42 = $data['additionalItems'];
            if (is_array($data['additionalItems'])) {
                $value_42 = $this->denormalizer->denormalize($data['additionalItems'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['additionalItems'])) {
                $value_42 = $data['additionalItems'];
            }
            $object->setAdditionalItems($value_42);
            unset($data['additionalItems']);
        }
        elseif (\array_key_exists('additionalItems', $data) && $data['additionalItems'] === null) {
            $object->setAdditionalItems(null);
            unset($data['additionalItems']);
        }
        foreach ($data as $key_8 => $value_43) {
            if (preg_match('/^x-/', (string) $key_8)) {
                $object[$key_8] = $value_43;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dollarId') && null !== $data->getDollarId()) {
            $dataArray['$id'] = $data->getDollarId();
        }
        else {
            $dataArray['$id'] = null;
        }
        if ($data->isInitialized('dollarSchema') && null !== $data->getDollarSchema()) {
            $dataArray['$schema'] = $data->getDollarSchema();
        }
        else {
            $dataArray['$schema'] = null;
        }
        if ($data->isInitialized('dollarRef') && null !== $data->getDollarRef()) {
            $dataArray['$ref'] = $data->getDollarRef();
        }
        else {
            $dataArray['$ref'] = null;
        }
        if ($data->isInitialized('dollarAnchor') && null !== $data->getDollarAnchor()) {
            $dataArray['$anchor'] = $data->getDollarAnchor();
        }
        else {
            $dataArray['$anchor'] = null;
        }
        if ($data->isInitialized('dollarDynamicRef') && null !== $data->getDollarDynamicRef()) {
            $dataArray['$dynamicRef'] = $data->getDollarDynamicRef();
        }
        else {
            $dataArray['$dynamicRef'] = null;
        }
        if ($data->isInitialized('dollarDynamicAnchor') && null !== $data->getDollarDynamicAnchor()) {
            $dataArray['$dynamicAnchor'] = $data->getDollarDynamicAnchor();
        }
        else {
            $dataArray['$dynamicAnchor'] = null;
        }
        if ($data->isInitialized('dollarVocabulary') && null !== $data->getDollarVocabulary()) {
            $values = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getDollarVocabulary() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['$vocabulary'] = $values;
        }
        else {
            $dataArray['$vocabulary'] = null;
        }
        if ($data->isInitialized('dollarComment') && null !== $data->getDollarComment()) {
            $dataArray['$comment'] = $data->getDollarComment();
        }
        else {
            $dataArray['$comment'] = null;
        }
        if ($data->isInitialized('dollarDefs') && null !== $data->getDollarDefs()) {
            $values_1 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getDollarDefs() as $key_1 => $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_bool($value_1)) {
                    $value_2 = $value_1;
                }
                $values_1[$key_1] = $value_2;
            }
            $dataArray['$defs'] = $values_1;
        }
        else {
            $dataArray['$defs'] = null;
        }
        if ($data->isInitialized('prefixItems') && null !== $data->getPrefixItems()) {
            $values_2 = [];
            foreach ($data->getPrefixItems() as $value_3) {
                $value_4 = $value_3;
                if (is_object($value_3)) {
                    $value_4 = $value_3 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
                } elseif (is_bool($value_3)) {
                    $value_4 = $value_3;
                }
                $values_2[] = $value_4;
            }
            $dataArray['prefixItems'] = $values_2;
        }
        else {
            $dataArray['prefixItems'] = null;
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $value_5 = $data->getItems();
            if (is_object($data->getItems())) {
                $value_5 = $data->getItems() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getItems(), 'json', $context));
            } elseif (is_bool($data->getItems())) {
                $value_5 = $data->getItems();
            } elseif (is_array($data->getItems())) {
                $values_3 = [];
                foreach ($data->getItems() as $value_6) {
                    $value_7 = $value_6;
                    if (is_object($value_6)) {
                        $value_7 = $value_6 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
                    } elseif (is_bool($value_6)) {
                        $value_7 = $value_6;
                    }
                    $values_3[] = $value_7;
                }
                $value_5 = $values_3;
            }
            $dataArray['items'] = $value_5;
        }
        else {
            $dataArray['items'] = null;
        }
        if ($data->isInitialized('contains') && null !== $data->getContains()) {
            $value_8 = $data->getContains();
            if (is_object($data->getContains())) {
                $value_8 = $data->getContains() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getContains(), 'json', $context));
            } elseif (is_bool($data->getContains())) {
                $value_8 = $data->getContains();
            }
            $dataArray['contains'] = $value_8;
        }
        else {
            $dataArray['contains'] = null;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $value_9 = $data->getAdditionalProperties();
            if (is_object($data->getAdditionalProperties())) {
                $value_9 = $data->getAdditionalProperties() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalProperties(), 'json', $context));
            } elseif (is_bool($data->getAdditionalProperties())) {
                $value_9 = $data->getAdditionalProperties();
            }
            $dataArray['additionalProperties'] = $value_9;
        }
        else {
            $dataArray['additionalProperties'] = null;
        }
        if ($data->isInitialized('properties') && null !== $data->getProperties()) {
            $values_4 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getProperties() as $key_2 => $value_10) {
                $value_11 = $value_10;
                if (is_object($value_10)) {
                    $value_11 = $value_10 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_10, 'json', $context));
                } elseif (is_bool($value_10)) {
                    $value_11 = $value_10;
                }
                $values_4[$key_2] = $value_11;
            }
            $dataArray['properties'] = $values_4;
        }
        else {
            $dataArray['properties'] = null;
        }
        if ($data->isInitialized('patternProperties') && null !== $data->getPatternProperties()) {
            $values_5 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getPatternProperties() as $key_3 => $value_12) {
                $value_13 = $value_12;
                if (is_object($value_12)) {
                    $value_13 = $value_12 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_12, 'json', $context));
                } elseif (is_bool($value_12)) {
                    $value_13 = $value_12;
                }
                $values_5[$key_3] = $value_13;
            }
            $dataArray['patternProperties'] = $values_5;
        }
        else {
            $dataArray['patternProperties'] = null;
        }
        if ($data->isInitialized('dependentSchemas') && null !== $data->getDependentSchemas()) {
            $values_6 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getDependentSchemas() as $key_4 => $value_14) {
                $value_15 = $value_14;
                if (is_object($value_14)) {
                    $value_15 = $value_14 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_14, 'json', $context));
                } elseif (is_bool($value_14)) {
                    $value_15 = $value_14;
                }
                $values_6[$key_4] = $value_15;
            }
            $dataArray['dependentSchemas'] = $values_6;
        }
        else {
            $dataArray['dependentSchemas'] = null;
        }
        if ($data->isInitialized('propertyNames') && null !== $data->getPropertyNames()) {
            $value_16 = $data->getPropertyNames();
            if (is_object($data->getPropertyNames())) {
                $value_16 = $data->getPropertyNames() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getPropertyNames(), 'json', $context));
            } elseif (is_bool($data->getPropertyNames())) {
                $value_16 = $data->getPropertyNames();
            }
            $dataArray['propertyNames'] = $value_16;
        }
        else {
            $dataArray['propertyNames'] = null;
        }
        if ($data->isInitialized('if') && null !== $data->getIf()) {
            $value_17 = $data->getIf();
            if (is_object($data->getIf())) {
                $value_17 = $data->getIf() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getIf(), 'json', $context));
            } elseif (is_bool($data->getIf())) {
                $value_17 = $data->getIf();
            }
            $dataArray['if'] = $value_17;
        }
        else {
            $dataArray['if'] = null;
        }
        if ($data->isInitialized('then') && null !== $data->getThen()) {
            $value_18 = $data->getThen();
            if (is_object($data->getThen())) {
                $value_18 = $data->getThen() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getThen(), 'json', $context));
            } elseif (is_bool($data->getThen())) {
                $value_18 = $data->getThen();
            }
            $dataArray['then'] = $value_18;
        }
        else {
            $dataArray['then'] = null;
        }
        if ($data->isInitialized('else') && null !== $data->getElse()) {
            $value_19 = $data->getElse();
            if (is_object($data->getElse())) {
                $value_19 = $data->getElse() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getElse(), 'json', $context));
            } elseif (is_bool($data->getElse())) {
                $value_19 = $data->getElse();
            }
            $dataArray['else'] = $value_19;
        }
        else {
            $dataArray['else'] = null;
        }
        if ($data->isInitialized('allOf') && null !== $data->getAllOf()) {
            $values_7 = [];
            foreach ($data->getAllOf() as $value_20) {
                $value_21 = $value_20;
                if (is_object($value_20)) {
                    $value_21 = $value_20 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_20, 'json', $context));
                } elseif (is_bool($value_20)) {
                    $value_21 = $value_20;
                }
                $values_7[] = $value_21;
            }
            $dataArray['allOf'] = $values_7;
        }
        else {
            $dataArray['allOf'] = null;
        }
        if ($data->isInitialized('anyOf') && null !== $data->getAnyOf()) {
            $values_8 = [];
            foreach ($data->getAnyOf() as $value_22) {
                $value_23 = $value_22;
                if (is_object($value_22)) {
                    $value_23 = $value_22 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_22, 'json', $context));
                } elseif (is_bool($value_22)) {
                    $value_23 = $value_22;
                }
                $values_8[] = $value_23;
            }
            $dataArray['anyOf'] = $values_8;
        }
        else {
            $dataArray['anyOf'] = null;
        }
        if ($data->isInitialized('oneOf') && null !== $data->getOneOf()) {
            $values_9 = [];
            foreach ($data->getOneOf() as $value_24) {
                $value_25 = $value_24;
                if (is_object($value_24)) {
                    $value_25 = $value_24 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_24, 'json', $context));
                } elseif (is_bool($value_24)) {
                    $value_25 = $value_24;
                }
                $values_9[] = $value_25;
            }
            $dataArray['oneOf'] = $values_9;
        }
        else {
            $dataArray['oneOf'] = null;
        }
        if ($data->isInitialized('not') && null !== $data->getNot()) {
            $value_26 = $data->getNot();
            if (is_object($data->getNot())) {
                $value_26 = $data->getNot() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getNot(), 'json', $context));
            } elseif (is_bool($data->getNot())) {
                $value_26 = $data->getNot();
            }
            $dataArray['not'] = $value_26;
        }
        else {
            $dataArray['not'] = null;
        }
        if ($data->isInitialized('unevaluatedItems') && null !== $data->getUnevaluatedItems()) {
            $value_27 = $data->getUnevaluatedItems();
            if (is_object($data->getUnevaluatedItems())) {
                $value_27 = $data->getUnevaluatedItems() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getUnevaluatedItems(), 'json', $context));
            } elseif (is_bool($data->getUnevaluatedItems())) {
                $value_27 = $data->getUnevaluatedItems();
            }
            $dataArray['unevaluatedItems'] = $value_27;
        }
        else {
            $dataArray['unevaluatedItems'] = null;
        }
        if ($data->isInitialized('unevaluatedProperties') && null !== $data->getUnevaluatedProperties()) {
            $value_28 = $data->getUnevaluatedProperties();
            if (is_object($data->getUnevaluatedProperties())) {
                $value_28 = $data->getUnevaluatedProperties() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getUnevaluatedProperties(), 'json', $context));
            } elseif (is_bool($data->getUnevaluatedProperties())) {
                $value_28 = $data->getUnevaluatedProperties();
            }
            $dataArray['unevaluatedProperties'] = $value_28;
        }
        else {
            $dataArray['unevaluatedProperties'] = null;
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $value_29 = $data->getType();
            if (is_array($data->getType())) {
                $values_10 = [];
                foreach ($data->getType() as $value_30) {
                    $values_10[] = $value_30;
                }
                $value_29 = $values_10;
            } elseif (!is_null($data->getType())) {
                $value_29 = $data->getType();
            }
            $dataArray['type'] = $value_29;
        }
        else {
            $dataArray['type'] = null;
        }
        if ($data->isInitialized('const') && null !== $data->getConst()) {
            $dataArray['const'] = $data->getConst();
        }
        else {
            $dataArray['const'] = null;
        }
        if ($data->isInitialized('enum') && null !== $data->getEnum()) {
            $values_11 = [];
            foreach ($data->getEnum() as $value_31) {
                $values_11[] = $value_31;
            }
            $dataArray['enum'] = $values_11;
        }
        else {
            $dataArray['enum'] = null;
        }
        if ($data->isInitialized('multipleOf') && null !== $data->getMultipleOf()) {
            $dataArray['multipleOf'] = $data->getMultipleOf();
        }
        else {
            $dataArray['multipleOf'] = null;
        }
        if ($data->isInitialized('maximum') && null !== $data->getMaximum()) {
            $dataArray['maximum'] = $data->getMaximum();
        }
        else {
            $dataArray['maximum'] = null;
        }
        if ($data->isInitialized('exclusiveMaximum') && null !== $data->getExclusiveMaximum()) {
            $dataArray['exclusiveMaximum'] = $data->getExclusiveMaximum();
        }
        else {
            $dataArray['exclusiveMaximum'] = null;
        }
        if ($data->isInitialized('minimum') && null !== $data->getMinimum()) {
            $dataArray['minimum'] = $data->getMinimum();
        }
        else {
            $dataArray['minimum'] = null;
        }
        if ($data->isInitialized('exclusiveMinimum') && null !== $data->getExclusiveMinimum()) {
            $dataArray['exclusiveMinimum'] = $data->getExclusiveMinimum();
        }
        else {
            $dataArray['exclusiveMinimum'] = null;
        }
        if ($data->isInitialized('maxLength') && null !== $data->getMaxLength()) {
            $dataArray['maxLength'] = $data->getMaxLength();
        }
        else {
            $dataArray['maxLength'] = null;
        }
        if ($data->isInitialized('minLength') && null !== $data->getMinLength()) {
            $dataArray['minLength'] = $data->getMinLength();
        }
        else {
            $dataArray['minLength'] = null;
        }
        if ($data->isInitialized('pattern') && null !== $data->getPattern()) {
            $dataArray['pattern'] = $data->getPattern();
        }
        else {
            $dataArray['pattern'] = null;
        }
        if ($data->isInitialized('maxItems') && null !== $data->getMaxItems()) {
            $dataArray['maxItems'] = $data->getMaxItems();
        }
        else {
            $dataArray['maxItems'] = null;
        }
        if ($data->isInitialized('minItems') && null !== $data->getMinItems()) {
            $dataArray['minItems'] = $data->getMinItems();
        }
        else {
            $dataArray['minItems'] = null;
        }
        if ($data->isInitialized('uniqueItems') && null !== $data->getUniqueItems()) {
            $dataArray['uniqueItems'] = $data->getUniqueItems();
        }
        else {
            $dataArray['uniqueItems'] = null;
        }
        if ($data->isInitialized('maxContains') && null !== $data->getMaxContains()) {
            $dataArray['maxContains'] = $data->getMaxContains();
        }
        else {
            $dataArray['maxContains'] = null;
        }
        if ($data->isInitialized('minContains') && null !== $data->getMinContains()) {
            $dataArray['minContains'] = $data->getMinContains();
        }
        else {
            $dataArray['minContains'] = null;
        }
        if ($data->isInitialized('maxProperties') && null !== $data->getMaxProperties()) {
            $dataArray['maxProperties'] = $data->getMaxProperties();
        }
        else {
            $dataArray['maxProperties'] = null;
        }
        if ($data->isInitialized('minProperties') && null !== $data->getMinProperties()) {
            $dataArray['minProperties'] = $data->getMinProperties();
        }
        else {
            $dataArray['minProperties'] = null;
        }
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $values_12 = [];
            foreach ($data->getRequired() as $value_32) {
                $values_12[] = $value_32;
            }
            $dataArray['required'] = $values_12;
        }
        else {
            $dataArray['required'] = null;
        }
        if ($data->isInitialized('dependentRequired') && null !== $data->getDependentRequired()) {
            $values_13 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getDependentRequired() as $key_5 => $value_33) {
                $values_14 = [];
                foreach ($value_33 as $value_34) {
                    $values_14[] = $value_34;
                }
                $values_13[$key_5] = $values_14;
            }
            $dataArray['dependentRequired'] = $values_13;
        }
        else {
            $dataArray['dependentRequired'] = null;
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        else {
            $dataArray['title'] = null;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        else {
            $dataArray['description'] = null;
        }
        if ($data->isInitialized('default') && null !== $data->getDefault()) {
            $dataArray['default'] = $data->getDefault();
        }
        else {
            $dataArray['default'] = null;
        }
        if ($data->isInitialized('deprecated') && null !== $data->getDeprecated()) {
            $dataArray['deprecated'] = $data->getDeprecated();
        }
        else {
            $dataArray['deprecated'] = null;
        }
        if ($data->isInitialized('readOnly') && null !== $data->getReadOnly()) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        else {
            $dataArray['readOnly'] = null;
        }
        if ($data->isInitialized('writeOnly') && null !== $data->getWriteOnly()) {
            $dataArray['writeOnly'] = $data->getWriteOnly();
        }
        else {
            $dataArray['writeOnly'] = null;
        }
        if ($data->isInitialized('examples') && null !== $data->getExamples()) {
            $values_15 = [];
            foreach ($data->getExamples() as $value_35) {
                $values_15[] = $value_35;
            }
            $dataArray['examples'] = $values_15;
        }
        else {
            $dataArray['examples'] = null;
        }
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        else {
            $dataArray['format'] = null;
        }
        if ($data->isInitialized('contentEncoding') && null !== $data->getContentEncoding()) {
            $dataArray['contentEncoding'] = $data->getContentEncoding();
        }
        else {
            $dataArray['contentEncoding'] = null;
        }
        if ($data->isInitialized('contentMediaType') && null !== $data->getContentMediaType()) {
            $dataArray['contentMediaType'] = $data->getContentMediaType();
        }
        else {
            $dataArray['contentMediaType'] = null;
        }
        if ($data->isInitialized('contentSchema') && null !== $data->getContentSchema()) {
            $value_36 = $data->getContentSchema();
            if (is_object($data->getContentSchema())) {
                $value_36 = $data->getContentSchema() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getContentSchema(), 'json', $context));
            } elseif (is_bool($data->getContentSchema())) {
                $value_36 = $data->getContentSchema();
            }
            $dataArray['contentSchema'] = $value_36;
        }
        else {
            $dataArray['contentSchema'] = null;
        }
        if ($data->isInitialized('definitions') && null !== $data->getDefinitions()) {
            $values_16 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getDefinitions() as $key_6 => $value_37) {
                $value_38 = $value_37;
                if (is_object($value_37)) {
                    $value_38 = $value_37 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_37, 'json', $context));
                } elseif (is_bool($value_37)) {
                    $value_38 = $value_37;
                }
                $values_16[$key_6] = $value_38;
            }
            $dataArray['definitions'] = $values_16;
        }
        else {
            $dataArray['definitions'] = null;
        }
        if ($data->isInitialized('dependencies') && null !== $data->getDependencies()) {
            $values_17 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->getDependencies() as $key_7 => $value_39) {
                $value_40 = $value_39;
                if (is_object($value_39)) {
                    $value_40 = $value_39 === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($value_39, 'json', $context));
                } elseif (is_bool($value_39)) {
                    $value_40 = $value_39;
                } elseif (is_array($value_39)) {
                    $values_18 = [];
                    foreach ($value_39 as $value_41) {
                        $values_18[] = $value_41;
                    }
                    $value_40 = $values_18;
                }
                $values_17[$key_7] = $value_40;
            }
            $dataArray['dependencies'] = $values_17;
        }
        else {
            $dataArray['dependencies'] = null;
        }
        if ($data->isInitialized('dollarRecursiveAnchor') && null !== $data->getDollarRecursiveAnchor()) {
            $dataArray['$recursiveAnchor'] = $data->getDollarRecursiveAnchor();
        }
        else {
            $dataArray['$recursiveAnchor'] = null;
        }
        if ($data->isInitialized('dollarRecursiveRef') && null !== $data->getDollarRecursiveRef()) {
            $dataArray['$recursiveRef'] = $data->getDollarRecursiveRef();
        }
        else {
            $dataArray['$recursiveRef'] = null;
        }
        if ($data->isInitialized('additionalItems') && null !== $data->getAdditionalItems()) {
            $value_42 = $data->getAdditionalItems();
            if (is_object($data->getAdditionalItems())) {
                $value_42 = $data->getAdditionalItems() === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalItems(), 'json', $context));
            } elseif (is_bool($data->getAdditionalItems())) {
                $value_42 = $data->getAdditionalItems();
            }
            $dataArray['additionalItems'] = $value_42;
        }
        else {
            $dataArray['additionalItems'] = null;
        }
        foreach ($data->additionalPropertyEntries() as $key_8 => $value_43) {
            if (preg_match('/^x-/', (string) $key_8)) {
                $dataArray[$key_8] = $value_43;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class => false];
    }
}