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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema();
        if (\array_key_exists('multipleOf', $data) && \is_int($data['multipleOf'])) {
            $data['multipleOf'] = (double) $data['multipleOf'];
        }
        if (\array_key_exists('maximum', $data) && \is_int($data['maximum'])) {
            $data['maximum'] = (double) $data['maximum'];
        }
        if (\array_key_exists('exclusiveMaximum', $data) && \is_int($data['exclusiveMaximum'])) {
            $data['exclusiveMaximum'] = (double) $data['exclusiveMaximum'];
        }
        if (\array_key_exists('minimum', $data) && \is_int($data['minimum'])) {
            $data['minimum'] = (double) $data['minimum'];
        }
        if (\array_key_exists('exclusiveMinimum', $data) && \is_int($data['exclusiveMinimum'])) {
            $data['exclusiveMinimum'] = (double) $data['exclusiveMinimum'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('definitions', $data) && $data['definitions'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['definitions'] as $key => $value) {
                $value_1 = $value;
                if (is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value)) {
                    $value_1 = $value;
                }
                $values[$key] = $value_1;
            }
            $object->setDefinitions($values);
        }
        elseif (\array_key_exists('definitions', $data) && $data['definitions'] === null) {
            $object->setDefinitions(null);
        }
        if (\array_key_exists('dependencies', $data) && $data['dependencies'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['dependencies'] as $key_1 => $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_2)) {
                    $value_3 = $value_2;
                } elseif (is_array($value_2) && $this->isOnlyNumericKeys($value_2)) {
                    $values_2 = [];
                    foreach ($value_2 as $value_4) {
                        $values_2[] = $value_4;
                    }
                    $value_3 = $values_2;
                }
                $values_1[$key_1] = $value_3;
            }
            $object->setDependencies($values_1);
        }
        elseif (\array_key_exists('dependencies', $data) && $data['dependencies'] === null) {
            $object->setDependencies(null);
        }
        if (\array_key_exists('additionalItems', $data) && $data['additionalItems'] !== null) {
            $value_5 = $data['additionalItems'];
            if (is_array($data['additionalItems'])) {
                $value_5 = $this->denormalizer->denormalize($data['additionalItems'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['additionalItems'])) {
                $value_5 = $data['additionalItems'];
            }
            $object->setAdditionalItems($value_5);
        }
        elseif (\array_key_exists('additionalItems', $data) && $data['additionalItems'] === null) {
            $object->setAdditionalItems(null);
        }
        if (\array_key_exists('unevaluatedItems', $data) && $data['unevaluatedItems'] !== null) {
            $value_6 = $data['unevaluatedItems'];
            if (is_array($data['unevaluatedItems'])) {
                $value_6 = $this->denormalizer->denormalize($data['unevaluatedItems'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['unevaluatedItems'])) {
                $value_6 = $data['unevaluatedItems'];
            }
            $object->setUnevaluatedItems($value_6);
        }
        elseif (\array_key_exists('unevaluatedItems', $data) && $data['unevaluatedItems'] === null) {
            $object->setUnevaluatedItems(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $value_7 = $data['items'];
            if (is_array($data['items'])) {
                $value_7 = $this->denormalizer->denormalize($data['items'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['items'])) {
                $value_7 = $data['items'];
            } elseif (is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values_3 = [];
                foreach ($data['items'] as $value_8) {
                    $value_9 = $value_8;
                    if (is_array($value_8)) {
                        $value_9 = $this->denormalizer->denormalize($value_8, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                    } elseif (is_bool($value_8)) {
                        $value_9 = $value_8;
                    }
                    $values_3[] = $value_9;
                }
                $value_7 = $values_3;
            }
            $object->setItems($value_7);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('contains', $data) && $data['contains'] !== null) {
            $value_10 = $data['contains'];
            if (is_array($data['contains'])) {
                $value_10 = $this->denormalizer->denormalize($data['contains'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['contains'])) {
                $value_10 = $data['contains'];
            }
            $object->setContains($value_10);
        }
        elseif (\array_key_exists('contains', $data) && $data['contains'] === null) {
            $object->setContains(null);
        }
        if (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] !== null) {
            $value_11 = $data['additionalProperties'];
            if (is_array($data['additionalProperties'])) {
                $value_11 = $this->denormalizer->denormalize($data['additionalProperties'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['additionalProperties'])) {
                $value_11 = $data['additionalProperties'];
            }
            $object->setAdditionalProperties($value_11);
        }
        elseif (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] === null) {
            $object->setAdditionalProperties(null);
        }
        if (\array_key_exists('unevaluatedProperties', $data) && $data['unevaluatedProperties'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['unevaluatedProperties'] as $key_2 => $value_12) {
                $value_13 = $value_12;
                if (is_array($value_12)) {
                    $value_13 = $this->denormalizer->denormalize($value_12, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_12)) {
                    $value_13 = $value_12;
                }
                $values_4[$key_2] = $value_13;
            }
            $object->setUnevaluatedProperties($values_4);
        }
        elseif (\array_key_exists('unevaluatedProperties', $data) && $data['unevaluatedProperties'] === null) {
            $object->setUnevaluatedProperties(null);
        }
        if (\array_key_exists('properties', $data) && $data['properties'] !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['properties'] as $key_3 => $value_14) {
                $value_15 = $value_14;
                if (is_array($value_14)) {
                    $value_15 = $this->denormalizer->denormalize($value_14, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_14)) {
                    $value_15 = $value_14;
                }
                $values_5[$key_3] = $value_15;
            }
            $object->setProperties($values_5);
        }
        elseif (\array_key_exists('properties', $data) && $data['properties'] === null) {
            $object->setProperties(null);
        }
        if (\array_key_exists('patternProperties', $data) && $data['patternProperties'] !== null) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['patternProperties'] as $key_4 => $value_16) {
                $value_17 = $value_16;
                if (is_array($value_16)) {
                    $value_17 = $this->denormalizer->denormalize($value_16, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_16)) {
                    $value_17 = $value_16;
                }
                $values_6[$key_4] = $value_17;
            }
            $object->setPatternProperties($values_6);
        }
        elseif (\array_key_exists('patternProperties', $data) && $data['patternProperties'] === null) {
            $object->setPatternProperties(null);
        }
        if (\array_key_exists('dependentSchemas', $data) && $data['dependentSchemas'] !== null) {
            $values_7 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['dependentSchemas'] as $key_5 => $value_18) {
                $value_19 = $value_18;
                if (is_array($value_18)) {
                    $value_19 = $this->denormalizer->denormalize($value_18, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_18)) {
                    $value_19 = $value_18;
                }
                $values_7[$key_5] = $value_19;
            }
            $object->setDependentSchemas($values_7);
        }
        elseif (\array_key_exists('dependentSchemas', $data) && $data['dependentSchemas'] === null) {
            $object->setDependentSchemas(null);
        }
        if (\array_key_exists('propertyNames', $data) && $data['propertyNames'] !== null) {
            $value_20 = $data['propertyNames'];
            if (is_array($data['propertyNames'])) {
                $value_20 = $this->denormalizer->denormalize($data['propertyNames'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['propertyNames'])) {
                $value_20 = $data['propertyNames'];
            }
            $object->setPropertyNames($value_20);
        }
        elseif (\array_key_exists('propertyNames', $data) && $data['propertyNames'] === null) {
            $object->setPropertyNames(null);
        }
        if (\array_key_exists('if', $data) && $data['if'] !== null) {
            $value_21 = $data['if'];
            if (is_array($data['if'])) {
                $value_21 = $this->denormalizer->denormalize($data['if'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['if'])) {
                $value_21 = $data['if'];
            }
            $object->setIf($value_21);
        }
        elseif (\array_key_exists('if', $data) && $data['if'] === null) {
            $object->setIf(null);
        }
        if (\array_key_exists('then', $data) && $data['then'] !== null) {
            $value_22 = $data['then'];
            if (is_array($data['then'])) {
                $value_22 = $this->denormalizer->denormalize($data['then'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['then'])) {
                $value_22 = $data['then'];
            }
            $object->setThen($value_22);
        }
        elseif (\array_key_exists('then', $data) && $data['then'] === null) {
            $object->setThen(null);
        }
        if (\array_key_exists('else', $data) && $data['else'] !== null) {
            $value_23 = $data['else'];
            if (is_array($data['else'])) {
                $value_23 = $this->denormalizer->denormalize($data['else'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['else'])) {
                $value_23 = $data['else'];
            }
            $object->setElse($value_23);
        }
        elseif (\array_key_exists('else', $data) && $data['else'] === null) {
            $object->setElse(null);
        }
        if (\array_key_exists('allOf', $data) && $data['allOf'] !== null) {
            $values_8 = [];
            foreach ($data['allOf'] as $value_24) {
                $value_25 = $value_24;
                if (is_array($value_24)) {
                    $value_25 = $this->denormalizer->denormalize($value_24, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_24)) {
                    $value_25 = $value_24;
                }
                $values_8[] = $value_25;
            }
            $object->setAllOf($values_8);
        }
        elseif (\array_key_exists('allOf', $data) && $data['allOf'] === null) {
            $object->setAllOf(null);
        }
        if (\array_key_exists('anyOf', $data) && $data['anyOf'] !== null) {
            $values_9 = [];
            foreach ($data['anyOf'] as $value_26) {
                $value_27 = $value_26;
                if (is_array($value_26)) {
                    $value_27 = $this->denormalizer->denormalize($value_26, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_26)) {
                    $value_27 = $value_26;
                }
                $values_9[] = $value_27;
            }
            $object->setAnyOf($values_9);
        }
        elseif (\array_key_exists('anyOf', $data) && $data['anyOf'] === null) {
            $object->setAnyOf(null);
        }
        if (\array_key_exists('oneOf', $data) && $data['oneOf'] !== null) {
            $values_10 = [];
            foreach ($data['oneOf'] as $value_28) {
                $value_29 = $value_28;
                if (is_array($value_28)) {
                    $value_29 = $this->denormalizer->denormalize($value_28, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_28)) {
                    $value_29 = $value_28;
                }
                $values_10[] = $value_29;
            }
            $object->setOneOf($values_10);
        }
        elseif (\array_key_exists('oneOf', $data) && $data['oneOf'] === null) {
            $object->setOneOf(null);
        }
        if (\array_key_exists('not', $data) && $data['not'] !== null) {
            $value_30 = $data['not'];
            if (is_array($data['not'])) {
                $value_30 = $this->denormalizer->denormalize($data['not'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['not'])) {
                $value_30 = $data['not'];
            }
            $object->setNot($value_30);
        }
        elseif (\array_key_exists('not', $data) && $data['not'] === null) {
            $object->setNot(null);
        }
        if (\array_key_exists('contentMediaType', $data) && $data['contentMediaType'] !== null) {
            $object->setContentMediaType($data['contentMediaType']);
        }
        elseif (\array_key_exists('contentMediaType', $data) && $data['contentMediaType'] === null) {
            $object->setContentMediaType(null);
        }
        if (\array_key_exists('contentEncoding', $data) && $data['contentEncoding'] !== null) {
            $object->setContentEncoding($data['contentEncoding']);
        }
        elseif (\array_key_exists('contentEncoding', $data) && $data['contentEncoding'] === null) {
            $object->setContentEncoding(null);
        }
        if (\array_key_exists('contentSchema', $data) && $data['contentSchema'] !== null) {
            $value_31 = $data['contentSchema'];
            if (is_array($data['contentSchema'])) {
                $value_31 = $this->denormalizer->denormalize($data['contentSchema'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['contentSchema'])) {
                $value_31 = $data['contentSchema'];
            }
            $object->setContentSchema($value_31);
        }
        elseif (\array_key_exists('contentSchema', $data) && $data['contentSchema'] === null) {
            $object->setContentSchema(null);
        }
        if (\array_key_exists('$id', $data) && $data['$id'] !== null) {
            $object->setDollarId($data['$id']);
        }
        elseif (\array_key_exists('$id', $data) && $data['$id'] === null) {
            $object->setDollarId(null);
        }
        if (\array_key_exists('$schema', $data) && $data['$schema'] !== null) {
            $object->setDollarSchema($data['$schema']);
        }
        elseif (\array_key_exists('$schema', $data) && $data['$schema'] === null) {
            $object->setDollarSchema(null);
        }
        if (\array_key_exists('$anchor', $data) && $data['$anchor'] !== null) {
            $object->setDollarAnchor($data['$anchor']);
        }
        elseif (\array_key_exists('$anchor', $data) && $data['$anchor'] === null) {
            $object->setDollarAnchor(null);
        }
        if (\array_key_exists('$ref', $data) && $data['$ref'] !== null) {
            $object->setDollarRef($data['$ref']);
        }
        elseif (\array_key_exists('$ref', $data) && $data['$ref'] === null) {
            $object->setDollarRef(null);
        }
        if (\array_key_exists('$recursiveRef', $data) && $data['$recursiveRef'] !== null) {
            $object->setDollarRecursiveRef($data['$recursiveRef']);
        }
        elseif (\array_key_exists('$recursiveRef', $data) && $data['$recursiveRef'] === null) {
            $object->setDollarRecursiveRef(null);
        }
        if (\array_key_exists('$recursiveAnchor', $data) && $data['$recursiveAnchor'] !== null) {
            $object->setDollarRecursiveAnchor($data['$recursiveAnchor']);
        }
        elseif (\array_key_exists('$recursiveAnchor', $data) && $data['$recursiveAnchor'] === null) {
            $object->setDollarRecursiveAnchor(null);
        }
        if (\array_key_exists('$vocabulary', $data) && $data['$vocabulary'] !== null) {
            $values_11 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['$vocabulary'] as $key_6 => $value_32) {
                $values_11[$key_6] = $value_32;
            }
            $object->setDollarVocabulary($values_11);
        }
        elseif (\array_key_exists('$vocabulary', $data) && $data['$vocabulary'] === null) {
            $object->setDollarVocabulary(null);
        }
        if (\array_key_exists('$comment', $data) && $data['$comment'] !== null) {
            $object->setDollarComment($data['$comment']);
        }
        elseif (\array_key_exists('$comment', $data) && $data['$comment'] === null) {
            $object->setDollarComment(null);
        }
        if (\array_key_exists('$defs', $data) && $data['$defs'] !== null) {
            $values_12 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['$defs'] as $key_7 => $value_33) {
                $value_34 = $value_33;
                if (is_array($value_33)) {
                    $value_34 = $this->denormalizer->denormalize($value_33, \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
                } elseif (is_bool($value_33)) {
                    $value_34 = $value_33;
                }
                $values_12[$key_7] = $value_34;
            }
            $object->setDollarDefs($values_12);
        }
        elseif (\array_key_exists('$defs', $data) && $data['$defs'] === null) {
            $object->setDollarDefs(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('writeOnly', $data) && $data['writeOnly'] !== null) {
            $object->setWriteOnly($data['writeOnly']);
        }
        elseif (\array_key_exists('writeOnly', $data) && $data['writeOnly'] === null) {
            $object->setWriteOnly(null);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values_13 = [];
            foreach ($data['examples'] as $value_35) {
                $values_13[] = $value_35;
            }
            $object->setExamples($values_13);
        }
        elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
        }
        if (\array_key_exists('multipleOf', $data) && $data['multipleOf'] !== null) {
            $object->setMultipleOf($data['multipleOf']);
        }
        elseif (\array_key_exists('multipleOf', $data) && $data['multipleOf'] === null) {
            $object->setMultipleOf(null);
        }
        if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
            $object->setMaximum($data['maximum']);
        }
        elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
            $object->setMaximum(null);
        }
        if (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] !== null) {
            $object->setExclusiveMaximum($data['exclusiveMaximum']);
        }
        elseif (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] === null) {
            $object->setExclusiveMaximum(null);
        }
        if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
            $object->setMinimum($data['minimum']);
        }
        elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
            $object->setMinimum(null);
        }
        if (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] !== null) {
            $object->setExclusiveMinimum($data['exclusiveMinimum']);
        }
        elseif (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] === null) {
            $object->setExclusiveMinimum(null);
        }
        if (\array_key_exists('maxLength', $data) && $data['maxLength'] !== null) {
            $object->setMaxLength($data['maxLength']);
        }
        elseif (\array_key_exists('maxLength', $data) && $data['maxLength'] === null) {
            $object->setMaxLength(null);
        }
        if (\array_key_exists('minLength', $data) && $data['minLength'] !== null) {
            $object->setMinLength($data['minLength']);
        }
        elseif (\array_key_exists('minLength', $data) && $data['minLength'] === null) {
            $object->setMinLength(null);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
        }
        if (\array_key_exists('maxItems', $data) && $data['maxItems'] !== null) {
            $object->setMaxItems($data['maxItems']);
        }
        elseif (\array_key_exists('maxItems', $data) && $data['maxItems'] === null) {
            $object->setMaxItems(null);
        }
        if (\array_key_exists('minItems', $data) && $data['minItems'] !== null) {
            $object->setMinItems($data['minItems']);
        }
        elseif (\array_key_exists('minItems', $data) && $data['minItems'] === null) {
            $object->setMinItems(null);
        }
        if (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] !== null) {
            $object->setUniqueItems($data['uniqueItems']);
        }
        elseif (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] === null) {
            $object->setUniqueItems(null);
        }
        if (\array_key_exists('maxContains', $data) && $data['maxContains'] !== null) {
            $object->setMaxContains($data['maxContains']);
        }
        elseif (\array_key_exists('maxContains', $data) && $data['maxContains'] === null) {
            $object->setMaxContains(null);
        }
        if (\array_key_exists('minContains', $data) && $data['minContains'] !== null) {
            $object->setMinContains($data['minContains']);
        }
        elseif (\array_key_exists('minContains', $data) && $data['minContains'] === null) {
            $object->setMinContains(null);
        }
        if (\array_key_exists('maxProperties', $data) && $data['maxProperties'] !== null) {
            $object->setMaxProperties($data['maxProperties']);
        }
        elseif (\array_key_exists('maxProperties', $data) && $data['maxProperties'] === null) {
            $object->setMaxProperties(null);
        }
        if (\array_key_exists('minProperties', $data) && $data['minProperties'] !== null) {
            $object->setMinProperties($data['minProperties']);
        }
        elseif (\array_key_exists('minProperties', $data) && $data['minProperties'] === null) {
            $object->setMinProperties(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $values_14 = [];
            foreach ($data['required'] as $value_36) {
                $values_14[] = $value_36;
            }
            $object->setRequired($values_14);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('dependentRequired', $data) && $data['dependentRequired'] !== null) {
            $values_15 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['dependentRequired'] as $key_8 => $value_37) {
                $values_16 = [];
                foreach ($value_37 as $value_38) {
                    $values_16[] = $value_38;
                }
                $values_15[$key_8] = $values_16;
            }
            $object->setDependentRequired($values_15);
        }
        elseif (\array_key_exists('dependentRequired', $data) && $data['dependentRequired'] === null) {
            $object->setDependentRequired(null);
        }
        if (\array_key_exists('const', $data) && $data['const'] !== null) {
            $object->setConst($data['const']);
        }
        elseif (\array_key_exists('const', $data) && $data['const'] === null) {
            $object->setConst(null);
        }
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $values_17 = [];
            foreach ($data['enum'] as $value_39) {
                $values_17[] = $value_39;
            }
            $object->setEnum($values_17);
        }
        elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->setEnum(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $value_40 = $data['type'];
            if (is_array($data['type']) && $this->isOnlyNumericKeys($data['type'])) {
                $values_18 = [];
                foreach ($data['type'] as $value_41) {
                    $values_18[] = $value_41;
                }
                $value_40 = $values_18;
            } elseif (isset($data['type'])) {
                $value_40 = $data['type'];
            }
            $object->setType($value_40);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('definitions') && null !== $data->getDefinitions()) {
            $values = [];
            foreach ($data->getDefinitions() as $key => $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_bool($value)) {
                    $value_1 = $value;
                }
                $values[$key] = $value_1;
            }
            $dataArray['definitions'] = $values;
        }
        else {
            $dataArray['definitions'] = null;
        }
        if ($data->isInitialized('dependencies') && null !== $data->getDependencies()) {
            $values_1 = [];
            foreach ($data->getDependencies() as $key_1 => $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_bool($value_2)) {
                    $value_3 = $value_2;
                } elseif (is_array($value_2)) {
                    $values_2 = [];
                    foreach ($value_2 as $value_4) {
                        $values_2[] = $value_4;
                    }
                    $value_3 = $values_2;
                }
                $values_1[$key_1] = $value_3;
            }
            $dataArray['dependencies'] = $values_1;
        }
        else {
            $dataArray['dependencies'] = null;
        }
        if ($data->isInitialized('additionalItems') && null !== $data->getAdditionalItems()) {
            $value_5 = $data->getAdditionalItems();
            if (is_object($data->getAdditionalItems())) {
                $value_5 = $this->normalizer->normalize($data->getAdditionalItems(), 'json', $context);
            } elseif (is_bool($data->getAdditionalItems())) {
                $value_5 = $data->getAdditionalItems();
            }
            $dataArray['additionalItems'] = $value_5;
        }
        else {
            $dataArray['additionalItems'] = null;
        }
        if ($data->isInitialized('unevaluatedItems') && null !== $data->getUnevaluatedItems()) {
            $value_6 = $data->getUnevaluatedItems();
            if (is_object($data->getUnevaluatedItems())) {
                $value_6 = $this->normalizer->normalize($data->getUnevaluatedItems(), 'json', $context);
            } elseif (is_bool($data->getUnevaluatedItems())) {
                $value_6 = $data->getUnevaluatedItems();
            }
            $dataArray['unevaluatedItems'] = $value_6;
        }
        else {
            $dataArray['unevaluatedItems'] = null;
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $value_7 = $data->getItems();
            if (is_object($data->getItems())) {
                $value_7 = $this->normalizer->normalize($data->getItems(), 'json', $context);
            } elseif (is_bool($data->getItems())) {
                $value_7 = $data->getItems();
            } elseif (is_array($data->getItems())) {
                $values_3 = [];
                foreach ($data->getItems() as $value_8) {
                    $value_9 = $value_8;
                    if (is_object($value_8)) {
                        $value_9 = $this->normalizer->normalize($value_8, 'json', $context);
                    } elseif (is_bool($value_8)) {
                        $value_9 = $value_8;
                    }
                    $values_3[] = $value_9;
                }
                $value_7 = $values_3;
            }
            $dataArray['items'] = $value_7;
        }
        else {
            $dataArray['items'] = null;
        }
        if ($data->isInitialized('contains') && null !== $data->getContains()) {
            $value_10 = $data->getContains();
            if (is_object($data->getContains())) {
                $value_10 = $this->normalizer->normalize($data->getContains(), 'json', $context);
            } elseif (is_bool($data->getContains())) {
                $value_10 = $data->getContains();
            }
            $dataArray['contains'] = $value_10;
        }
        else {
            $dataArray['contains'] = null;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $value_11 = $data->getAdditionalProperties();
            if (is_object($data->getAdditionalProperties())) {
                $value_11 = $this->normalizer->normalize($data->getAdditionalProperties(), 'json', $context);
            } elseif (is_bool($data->getAdditionalProperties())) {
                $value_11 = $data->getAdditionalProperties();
            }
            $dataArray['additionalProperties'] = $value_11;
        }
        else {
            $dataArray['additionalProperties'] = null;
        }
        if ($data->isInitialized('unevaluatedProperties') && null !== $data->getUnevaluatedProperties()) {
            $values_4 = [];
            foreach ($data->getUnevaluatedProperties() as $key_2 => $value_12) {
                $value_13 = $value_12;
                if (is_object($value_12)) {
                    $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                } elseif (is_bool($value_12)) {
                    $value_13 = $value_12;
                }
                $values_4[$key_2] = $value_13;
            }
            $dataArray['unevaluatedProperties'] = $values_4;
        }
        else {
            $dataArray['unevaluatedProperties'] = null;
        }
        if ($data->isInitialized('properties') && null !== $data->getProperties()) {
            $values_5 = [];
            foreach ($data->getProperties() as $key_3 => $value_14) {
                $value_15 = $value_14;
                if (is_object($value_14)) {
                    $value_15 = $this->normalizer->normalize($value_14, 'json', $context);
                } elseif (is_bool($value_14)) {
                    $value_15 = $value_14;
                }
                $values_5[$key_3] = $value_15;
            }
            $dataArray['properties'] = $values_5;
        }
        else {
            $dataArray['properties'] = null;
        }
        if ($data->isInitialized('patternProperties') && null !== $data->getPatternProperties()) {
            $values_6 = [];
            foreach ($data->getPatternProperties() as $key_4 => $value_16) {
                $value_17 = $value_16;
                if (is_object($value_16)) {
                    $value_17 = $this->normalizer->normalize($value_16, 'json', $context);
                } elseif (is_bool($value_16)) {
                    $value_17 = $value_16;
                }
                $values_6[$key_4] = $value_17;
            }
            $dataArray['patternProperties'] = $values_6;
        }
        else {
            $dataArray['patternProperties'] = null;
        }
        if ($data->isInitialized('dependentSchemas') && null !== $data->getDependentSchemas()) {
            $values_7 = [];
            foreach ($data->getDependentSchemas() as $key_5 => $value_18) {
                $value_19 = $value_18;
                if (is_object($value_18)) {
                    $value_19 = $this->normalizer->normalize($value_18, 'json', $context);
                } elseif (is_bool($value_18)) {
                    $value_19 = $value_18;
                }
                $values_7[$key_5] = $value_19;
            }
            $dataArray['dependentSchemas'] = $values_7;
        }
        else {
            $dataArray['dependentSchemas'] = null;
        }
        if ($data->isInitialized('propertyNames') && null !== $data->getPropertyNames()) {
            $value_20 = $data->getPropertyNames();
            if (is_object($data->getPropertyNames())) {
                $value_20 = $this->normalizer->normalize($data->getPropertyNames(), 'json', $context);
            } elseif (is_bool($data->getPropertyNames())) {
                $value_20 = $data->getPropertyNames();
            }
            $dataArray['propertyNames'] = $value_20;
        }
        else {
            $dataArray['propertyNames'] = null;
        }
        if ($data->isInitialized('if') && null !== $data->getIf()) {
            $value_21 = $data->getIf();
            if (is_object($data->getIf())) {
                $value_21 = $this->normalizer->normalize($data->getIf(), 'json', $context);
            } elseif (is_bool($data->getIf())) {
                $value_21 = $data->getIf();
            }
            $dataArray['if'] = $value_21;
        }
        else {
            $dataArray['if'] = null;
        }
        if ($data->isInitialized('then') && null !== $data->getThen()) {
            $value_22 = $data->getThen();
            if (is_object($data->getThen())) {
                $value_22 = $this->normalizer->normalize($data->getThen(), 'json', $context);
            } elseif (is_bool($data->getThen())) {
                $value_22 = $data->getThen();
            }
            $dataArray['then'] = $value_22;
        }
        else {
            $dataArray['then'] = null;
        }
        if ($data->isInitialized('else') && null !== $data->getElse()) {
            $value_23 = $data->getElse();
            if (is_object($data->getElse())) {
                $value_23 = $this->normalizer->normalize($data->getElse(), 'json', $context);
            } elseif (is_bool($data->getElse())) {
                $value_23 = $data->getElse();
            }
            $dataArray['else'] = $value_23;
        }
        else {
            $dataArray['else'] = null;
        }
        if ($data->isInitialized('allOf') && null !== $data->getAllOf()) {
            $values_8 = [];
            foreach ($data->getAllOf() as $value_24) {
                $value_25 = $value_24;
                if (is_object($value_24)) {
                    $value_25 = $this->normalizer->normalize($value_24, 'json', $context);
                } elseif (is_bool($value_24)) {
                    $value_25 = $value_24;
                }
                $values_8[] = $value_25;
            }
            $dataArray['allOf'] = $values_8;
        }
        else {
            $dataArray['allOf'] = null;
        }
        if ($data->isInitialized('anyOf') && null !== $data->getAnyOf()) {
            $values_9 = [];
            foreach ($data->getAnyOf() as $value_26) {
                $value_27 = $value_26;
                if (is_object($value_26)) {
                    $value_27 = $this->normalizer->normalize($value_26, 'json', $context);
                } elseif (is_bool($value_26)) {
                    $value_27 = $value_26;
                }
                $values_9[] = $value_27;
            }
            $dataArray['anyOf'] = $values_9;
        }
        else {
            $dataArray['anyOf'] = null;
        }
        if ($data->isInitialized('oneOf') && null !== $data->getOneOf()) {
            $values_10 = [];
            foreach ($data->getOneOf() as $value_28) {
                $value_29 = $value_28;
                if (is_object($value_28)) {
                    $value_29 = $this->normalizer->normalize($value_28, 'json', $context);
                } elseif (is_bool($value_28)) {
                    $value_29 = $value_28;
                }
                $values_10[] = $value_29;
            }
            $dataArray['oneOf'] = $values_10;
        }
        else {
            $dataArray['oneOf'] = null;
        }
        if ($data->isInitialized('not') && null !== $data->getNot()) {
            $value_30 = $data->getNot();
            if (is_object($data->getNot())) {
                $value_30 = $this->normalizer->normalize($data->getNot(), 'json', $context);
            } elseif (is_bool($data->getNot())) {
                $value_30 = $data->getNot();
            }
            $dataArray['not'] = $value_30;
        }
        else {
            $dataArray['not'] = null;
        }
        if ($data->isInitialized('contentMediaType') && null !== $data->getContentMediaType()) {
            $dataArray['contentMediaType'] = $data->getContentMediaType();
        }
        else {
            $dataArray['contentMediaType'] = null;
        }
        if ($data->isInitialized('contentEncoding') && null !== $data->getContentEncoding()) {
            $dataArray['contentEncoding'] = $data->getContentEncoding();
        }
        else {
            $dataArray['contentEncoding'] = null;
        }
        if ($data->isInitialized('contentSchema') && null !== $data->getContentSchema()) {
            $value_31 = $data->getContentSchema();
            if (is_object($data->getContentSchema())) {
                $value_31 = $this->normalizer->normalize($data->getContentSchema(), 'json', $context);
            } elseif (is_bool($data->getContentSchema())) {
                $value_31 = $data->getContentSchema();
            }
            $dataArray['contentSchema'] = $value_31;
        }
        else {
            $dataArray['contentSchema'] = null;
        }
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
        if ($data->isInitialized('dollarAnchor') && null !== $data->getDollarAnchor()) {
            $dataArray['$anchor'] = $data->getDollarAnchor();
        }
        else {
            $dataArray['$anchor'] = null;
        }
        if ($data->isInitialized('dollarRef') && null !== $data->getDollarRef()) {
            $dataArray['$ref'] = $data->getDollarRef();
        }
        else {
            $dataArray['$ref'] = null;
        }
        if ($data->isInitialized('dollarRecursiveRef') && null !== $data->getDollarRecursiveRef()) {
            $dataArray['$recursiveRef'] = $data->getDollarRecursiveRef();
        }
        else {
            $dataArray['$recursiveRef'] = null;
        }
        if ($data->isInitialized('dollarRecursiveAnchor') && null !== $data->getDollarRecursiveAnchor()) {
            $dataArray['$recursiveAnchor'] = $data->getDollarRecursiveAnchor();
        }
        else {
            $dataArray['$recursiveAnchor'] = null;
        }
        if ($data->isInitialized('dollarVocabulary') && null !== $data->getDollarVocabulary()) {
            $values_11 = [];
            foreach ($data->getDollarVocabulary() as $key_6 => $value_32) {
                $values_11[$key_6] = $value_32;
            }
            $dataArray['$vocabulary'] = $values_11;
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
            $values_12 = [];
            foreach ($data->getDollarDefs() as $key_7 => $value_33) {
                $value_34 = $value_33;
                if (is_object($value_33)) {
                    $value_34 = $this->normalizer->normalize($value_33, 'json', $context);
                } elseif (is_bool($value_33)) {
                    $value_34 = $value_33;
                }
                $values_12[$key_7] = $value_34;
            }
            $dataArray['$defs'] = $values_12;
        }
        else {
            $dataArray['$defs'] = null;
        }
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        else {
            $dataArray['format'] = null;
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
            $values_13 = [];
            foreach ($data->getExamples() as $value_35) {
                $values_13[] = $value_35;
            }
            $dataArray['examples'] = $values_13;
        }
        else {
            $dataArray['examples'] = null;
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
            $values_14 = [];
            foreach ($data->getRequired() as $value_36) {
                $values_14[] = $value_36;
            }
            $dataArray['required'] = $values_14;
        }
        else {
            $dataArray['required'] = null;
        }
        if ($data->isInitialized('dependentRequired') && null !== $data->getDependentRequired()) {
            $values_15 = [];
            foreach ($data->getDependentRequired() as $key_8 => $value_37) {
                $values_16 = [];
                foreach ($value_37 as $value_38) {
                    $values_16[] = $value_38;
                }
                $values_15[$key_8] = $values_16;
            }
            $dataArray['dependentRequired'] = $values_15;
        }
        else {
            $dataArray['dependentRequired'] = null;
        }
        if ($data->isInitialized('const') && null !== $data->getConst()) {
            $dataArray['const'] = $data->getConst();
        }
        else {
            $dataArray['const'] = null;
        }
        if ($data->isInitialized('enum') && null !== $data->getEnum()) {
            $values_17 = [];
            foreach ($data->getEnum() as $value_39) {
                $values_17[] = $value_39;
            }
            $dataArray['enum'] = $values_17;
        }
        else {
            $dataArray['enum'] = null;
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $value_40 = $data->getType();
            if (is_array($data->getType())) {
                $values_18 = [];
                foreach ($data->getType() as $value_41) {
                    $values_18[] = $value_41;
                }
                $value_40 = $values_18;
            } elseif (!is_null($data->getType())) {
                $value_40 = $data->getType();
            }
            $dataArray['type'] = $value_40;
        }
        else {
            $dataArray['type'] = null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class => false];
    }
}