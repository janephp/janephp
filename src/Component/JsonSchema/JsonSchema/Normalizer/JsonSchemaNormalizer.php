<?php

namespace Jane\Component\JsonSchema\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JsonSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return $data instanceof \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            if (\array_key_exists('$recursiveAnchor', $data) && \is_int($data['$recursiveAnchor'])) {
                $data['$recursiveAnchor'] = (bool) $data['$recursiveAnchor'];
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
            if (\array_key_exists('uniqueItems', $data) && \is_int($data['uniqueItems'])) {
                $data['uniqueItems'] = (bool) $data['uniqueItems'];
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
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('definitions') && null !== $object->getDefinitions()) {
                $values = [];
                foreach ($object->getDefinitions() as $key => $value) {
                    $value_1 = $value;
                    if (is_object($value)) {
                        $value_1 = $this->normalizer->normalize($value, 'json', $context);
                    } elseif (is_bool($value)) {
                        $value_1 = $value;
                    }
                    $values[$key] = $value_1;
                }
                $data['definitions'] = $values;
            }
            else {
                $data['definitions'] = null;
            }
            if ($object->isInitialized('dependencies') && null !== $object->getDependencies()) {
                $values_1 = [];
                foreach ($object->getDependencies() as $key_1 => $value_2) {
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
                $data['dependencies'] = $values_1;
            }
            else {
                $data['dependencies'] = null;
            }
            if ($object->isInitialized('additionalItems') && null !== $object->getAdditionalItems()) {
                $value_5 = $object->getAdditionalItems();
                if (is_object($object->getAdditionalItems())) {
                    $value_5 = $this->normalizer->normalize($object->getAdditionalItems(), 'json', $context);
                } elseif (is_bool($object->getAdditionalItems())) {
                    $value_5 = $object->getAdditionalItems();
                }
                $data['additionalItems'] = $value_5;
            }
            else {
                $data['additionalItems'] = null;
            }
            if ($object->isInitialized('unevaluatedItems') && null !== $object->getUnevaluatedItems()) {
                $value_6 = $object->getUnevaluatedItems();
                if (is_object($object->getUnevaluatedItems())) {
                    $value_6 = $this->normalizer->normalize($object->getUnevaluatedItems(), 'json', $context);
                } elseif (is_bool($object->getUnevaluatedItems())) {
                    $value_6 = $object->getUnevaluatedItems();
                }
                $data['unevaluatedItems'] = $value_6;
            }
            else {
                $data['unevaluatedItems'] = null;
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $value_7 = $object->getItems();
                if (is_object($object->getItems())) {
                    $value_7 = $this->normalizer->normalize($object->getItems(), 'json', $context);
                } elseif (is_bool($object->getItems())) {
                    $value_7 = $object->getItems();
                } elseif (is_array($object->getItems())) {
                    $values_3 = [];
                    foreach ($object->getItems() as $value_8) {
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
                $data['items'] = $value_7;
            }
            else {
                $data['items'] = null;
            }
            if ($object->isInitialized('contains') && null !== $object->getContains()) {
                $value_10 = $object->getContains();
                if (is_object($object->getContains())) {
                    $value_10 = $this->normalizer->normalize($object->getContains(), 'json', $context);
                } elseif (is_bool($object->getContains())) {
                    $value_10 = $object->getContains();
                }
                $data['contains'] = $value_10;
            }
            else {
                $data['contains'] = null;
            }
            if ($object->isInitialized('additionalProperties') && null !== $object->getAdditionalProperties()) {
                $value_11 = $object->getAdditionalProperties();
                if (is_object($object->getAdditionalProperties())) {
                    $value_11 = $this->normalizer->normalize($object->getAdditionalProperties(), 'json', $context);
                } elseif (is_bool($object->getAdditionalProperties())) {
                    $value_11 = $object->getAdditionalProperties();
                }
                $data['additionalProperties'] = $value_11;
            }
            else {
                $data['additionalProperties'] = null;
            }
            if ($object->isInitialized('unevaluatedProperties') && null !== $object->getUnevaluatedProperties()) {
                $values_4 = [];
                foreach ($object->getUnevaluatedProperties() as $key_2 => $value_12) {
                    $value_13 = $value_12;
                    if (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    } elseif (is_bool($value_12)) {
                        $value_13 = $value_12;
                    }
                    $values_4[$key_2] = $value_13;
                }
                $data['unevaluatedProperties'] = $values_4;
            }
            else {
                $data['unevaluatedProperties'] = null;
            }
            if ($object->isInitialized('properties') && null !== $object->getProperties()) {
                $values_5 = [];
                foreach ($object->getProperties() as $key_3 => $value_14) {
                    $value_15 = $value_14;
                    if (is_object($value_14)) {
                        $value_15 = $this->normalizer->normalize($value_14, 'json', $context);
                    } elseif (is_bool($value_14)) {
                        $value_15 = $value_14;
                    }
                    $values_5[$key_3] = $value_15;
                }
                $data['properties'] = $values_5;
            }
            else {
                $data['properties'] = null;
            }
            if ($object->isInitialized('patternProperties') && null !== $object->getPatternProperties()) {
                $values_6 = [];
                foreach ($object->getPatternProperties() as $key_4 => $value_16) {
                    $value_17 = $value_16;
                    if (is_object($value_16)) {
                        $value_17 = $this->normalizer->normalize($value_16, 'json', $context);
                    } elseif (is_bool($value_16)) {
                        $value_17 = $value_16;
                    }
                    $values_6[$key_4] = $value_17;
                }
                $data['patternProperties'] = $values_6;
            }
            else {
                $data['patternProperties'] = null;
            }
            if ($object->isInitialized('dependentSchemas') && null !== $object->getDependentSchemas()) {
                $values_7 = [];
                foreach ($object->getDependentSchemas() as $key_5 => $value_18) {
                    $value_19 = $value_18;
                    if (is_object($value_18)) {
                        $value_19 = $this->normalizer->normalize($value_18, 'json', $context);
                    } elseif (is_bool($value_18)) {
                        $value_19 = $value_18;
                    }
                    $values_7[$key_5] = $value_19;
                }
                $data['dependentSchemas'] = $values_7;
            }
            else {
                $data['dependentSchemas'] = null;
            }
            if ($object->isInitialized('propertyNames') && null !== $object->getPropertyNames()) {
                $value_20 = $object->getPropertyNames();
                if (is_object($object->getPropertyNames())) {
                    $value_20 = $this->normalizer->normalize($object->getPropertyNames(), 'json', $context);
                } elseif (is_bool($object->getPropertyNames())) {
                    $value_20 = $object->getPropertyNames();
                }
                $data['propertyNames'] = $value_20;
            }
            else {
                $data['propertyNames'] = null;
            }
            if ($object->isInitialized('if') && null !== $object->getIf()) {
                $value_21 = $object->getIf();
                if (is_object($object->getIf())) {
                    $value_21 = $this->normalizer->normalize($object->getIf(), 'json', $context);
                } elseif (is_bool($object->getIf())) {
                    $value_21 = $object->getIf();
                }
                $data['if'] = $value_21;
            }
            else {
                $data['if'] = null;
            }
            if ($object->isInitialized('then') && null !== $object->getThen()) {
                $value_22 = $object->getThen();
                if (is_object($object->getThen())) {
                    $value_22 = $this->normalizer->normalize($object->getThen(), 'json', $context);
                } elseif (is_bool($object->getThen())) {
                    $value_22 = $object->getThen();
                }
                $data['then'] = $value_22;
            }
            else {
                $data['then'] = null;
            }
            if ($object->isInitialized('else') && null !== $object->getElse()) {
                $value_23 = $object->getElse();
                if (is_object($object->getElse())) {
                    $value_23 = $this->normalizer->normalize($object->getElse(), 'json', $context);
                } elseif (is_bool($object->getElse())) {
                    $value_23 = $object->getElse();
                }
                $data['else'] = $value_23;
            }
            else {
                $data['else'] = null;
            }
            if ($object->isInitialized('allOf') && null !== $object->getAllOf()) {
                $values_8 = [];
                foreach ($object->getAllOf() as $value_24) {
                    $value_25 = $value_24;
                    if (is_object($value_24)) {
                        $value_25 = $this->normalizer->normalize($value_24, 'json', $context);
                    } elseif (is_bool($value_24)) {
                        $value_25 = $value_24;
                    }
                    $values_8[] = $value_25;
                }
                $data['allOf'] = $values_8;
            }
            else {
                $data['allOf'] = null;
            }
            if ($object->isInitialized('anyOf') && null !== $object->getAnyOf()) {
                $values_9 = [];
                foreach ($object->getAnyOf() as $value_26) {
                    $value_27 = $value_26;
                    if (is_object($value_26)) {
                        $value_27 = $this->normalizer->normalize($value_26, 'json', $context);
                    } elseif (is_bool($value_26)) {
                        $value_27 = $value_26;
                    }
                    $values_9[] = $value_27;
                }
                $data['anyOf'] = $values_9;
            }
            else {
                $data['anyOf'] = null;
            }
            if ($object->isInitialized('oneOf') && null !== $object->getOneOf()) {
                $values_10 = [];
                foreach ($object->getOneOf() as $value_28) {
                    $value_29 = $value_28;
                    if (is_object($value_28)) {
                        $value_29 = $this->normalizer->normalize($value_28, 'json', $context);
                    } elseif (is_bool($value_28)) {
                        $value_29 = $value_28;
                    }
                    $values_10[] = $value_29;
                }
                $data['oneOf'] = $values_10;
            }
            else {
                $data['oneOf'] = null;
            }
            if ($object->isInitialized('not') && null !== $object->getNot()) {
                $value_30 = $object->getNot();
                if (is_object($object->getNot())) {
                    $value_30 = $this->normalizer->normalize($object->getNot(), 'json', $context);
                } elseif (is_bool($object->getNot())) {
                    $value_30 = $object->getNot();
                }
                $data['not'] = $value_30;
            }
            else {
                $data['not'] = null;
            }
            if ($object->isInitialized('contentMediaType') && null !== $object->getContentMediaType()) {
                $data['contentMediaType'] = $object->getContentMediaType();
            }
            else {
                $data['contentMediaType'] = null;
            }
            if ($object->isInitialized('contentEncoding') && null !== $object->getContentEncoding()) {
                $data['contentEncoding'] = $object->getContentEncoding();
            }
            else {
                $data['contentEncoding'] = null;
            }
            if ($object->isInitialized('contentSchema') && null !== $object->getContentSchema()) {
                $value_31 = $object->getContentSchema();
                if (is_object($object->getContentSchema())) {
                    $value_31 = $this->normalizer->normalize($object->getContentSchema(), 'json', $context);
                } elseif (is_bool($object->getContentSchema())) {
                    $value_31 = $object->getContentSchema();
                }
                $data['contentSchema'] = $value_31;
            }
            else {
                $data['contentSchema'] = null;
            }
            if ($object->isInitialized('dollarId') && null !== $object->getDollarId()) {
                $data['$id'] = $object->getDollarId();
            }
            else {
                $data['$id'] = null;
            }
            if ($object->isInitialized('dollarSchema') && null !== $object->getDollarSchema()) {
                $data['$schema'] = $object->getDollarSchema();
            }
            else {
                $data['$schema'] = null;
            }
            if ($object->isInitialized('dollarAnchor') && null !== $object->getDollarAnchor()) {
                $data['$anchor'] = $object->getDollarAnchor();
            }
            else {
                $data['$anchor'] = null;
            }
            if ($object->isInitialized('dollarRef') && null !== $object->getDollarRef()) {
                $data['$ref'] = $object->getDollarRef();
            }
            else {
                $data['$ref'] = null;
            }
            if ($object->isInitialized('dollarRecursiveRef') && null !== $object->getDollarRecursiveRef()) {
                $data['$recursiveRef'] = $object->getDollarRecursiveRef();
            }
            else {
                $data['$recursiveRef'] = null;
            }
            if ($object->isInitialized('dollarRecursiveAnchor') && null !== $object->getDollarRecursiveAnchor()) {
                $data['$recursiveAnchor'] = $object->getDollarRecursiveAnchor();
            }
            else {
                $data['$recursiveAnchor'] = null;
            }
            if ($object->isInitialized('dollarVocabulary') && null !== $object->getDollarVocabulary()) {
                $values_11 = [];
                foreach ($object->getDollarVocabulary() as $key_6 => $value_32) {
                    $values_11[$key_6] = $value_32;
                }
                $data['$vocabulary'] = $values_11;
            }
            else {
                $data['$vocabulary'] = null;
            }
            if ($object->isInitialized('dollarComment') && null !== $object->getDollarComment()) {
                $data['$comment'] = $object->getDollarComment();
            }
            else {
                $data['$comment'] = null;
            }
            if ($object->isInitialized('dollarDefs') && null !== $object->getDollarDefs()) {
                $values_12 = [];
                foreach ($object->getDollarDefs() as $key_7 => $value_33) {
                    $value_34 = $value_33;
                    if (is_object($value_33)) {
                        $value_34 = $this->normalizer->normalize($value_33, 'json', $context);
                    } elseif (is_bool($value_33)) {
                        $value_34 = $value_33;
                    }
                    $values_12[$key_7] = $value_34;
                }
                $data['$defs'] = $values_12;
            }
            else {
                $data['$defs'] = null;
            }
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            else {
                $data['format'] = null;
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            else {
                $data['title'] = null;
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            else {
                $data['description'] = null;
            }
            if ($object->isInitialized('default') && null !== $object->getDefault()) {
                $data['default'] = $object->getDefault();
            }
            else {
                $data['default'] = null;
            }
            if ($object->isInitialized('deprecated') && null !== $object->getDeprecated()) {
                $data['deprecated'] = $object->getDeprecated();
            }
            else {
                $data['deprecated'] = null;
            }
            if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
                $data['readOnly'] = $object->getReadOnly();
            }
            else {
                $data['readOnly'] = null;
            }
            if ($object->isInitialized('writeOnly') && null !== $object->getWriteOnly()) {
                $data['writeOnly'] = $object->getWriteOnly();
            }
            else {
                $data['writeOnly'] = null;
            }
            if ($object->isInitialized('examples') && null !== $object->getExamples()) {
                $values_13 = [];
                foreach ($object->getExamples() as $value_35) {
                    $values_13[] = $value_35;
                }
                $data['examples'] = $values_13;
            }
            else {
                $data['examples'] = null;
            }
            if ($object->isInitialized('multipleOf') && null !== $object->getMultipleOf()) {
                $data['multipleOf'] = $object->getMultipleOf();
            }
            else {
                $data['multipleOf'] = null;
            }
            if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
                $data['maximum'] = $object->getMaximum();
            }
            else {
                $data['maximum'] = null;
            }
            if ($object->isInitialized('exclusiveMaximum') && null !== $object->getExclusiveMaximum()) {
                $data['exclusiveMaximum'] = $object->getExclusiveMaximum();
            }
            else {
                $data['exclusiveMaximum'] = null;
            }
            if ($object->isInitialized('minimum') && null !== $object->getMinimum()) {
                $data['minimum'] = $object->getMinimum();
            }
            else {
                $data['minimum'] = null;
            }
            if ($object->isInitialized('exclusiveMinimum') && null !== $object->getExclusiveMinimum()) {
                $data['exclusiveMinimum'] = $object->getExclusiveMinimum();
            }
            else {
                $data['exclusiveMinimum'] = null;
            }
            if ($object->isInitialized('maxLength') && null !== $object->getMaxLength()) {
                $data['maxLength'] = $object->getMaxLength();
            }
            else {
                $data['maxLength'] = null;
            }
            if ($object->isInitialized('minLength') && null !== $object->getMinLength()) {
                $data['minLength'] = $object->getMinLength();
            }
            else {
                $data['minLength'] = null;
            }
            if ($object->isInitialized('pattern') && null !== $object->getPattern()) {
                $data['pattern'] = $object->getPattern();
            }
            else {
                $data['pattern'] = null;
            }
            if ($object->isInitialized('maxItems') && null !== $object->getMaxItems()) {
                $data['maxItems'] = $object->getMaxItems();
            }
            else {
                $data['maxItems'] = null;
            }
            if ($object->isInitialized('minItems') && null !== $object->getMinItems()) {
                $data['minItems'] = $object->getMinItems();
            }
            else {
                $data['minItems'] = null;
            }
            if ($object->isInitialized('uniqueItems') && null !== $object->getUniqueItems()) {
                $data['uniqueItems'] = $object->getUniqueItems();
            }
            else {
                $data['uniqueItems'] = null;
            }
            if ($object->isInitialized('maxContains') && null !== $object->getMaxContains()) {
                $data['maxContains'] = $object->getMaxContains();
            }
            else {
                $data['maxContains'] = null;
            }
            if ($object->isInitialized('minContains') && null !== $object->getMinContains()) {
                $data['minContains'] = $object->getMinContains();
            }
            else {
                $data['minContains'] = null;
            }
            if ($object->isInitialized('maxProperties') && null !== $object->getMaxProperties()) {
                $data['maxProperties'] = $object->getMaxProperties();
            }
            else {
                $data['maxProperties'] = null;
            }
            if ($object->isInitialized('minProperties') && null !== $object->getMinProperties()) {
                $data['minProperties'] = $object->getMinProperties();
            }
            else {
                $data['minProperties'] = null;
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $values_14 = [];
                foreach ($object->getRequired() as $value_36) {
                    $values_14[] = $value_36;
                }
                $data['required'] = $values_14;
            }
            else {
                $data['required'] = null;
            }
            if ($object->isInitialized('dependentRequired') && null !== $object->getDependentRequired()) {
                $values_15 = [];
                foreach ($object->getDependentRequired() as $key_8 => $value_37) {
                    $values_16 = [];
                    foreach ($value_37 as $value_38) {
                        $values_16[] = $value_38;
                    }
                    $values_15[$key_8] = $values_16;
                }
                $data['dependentRequired'] = $values_15;
            }
            else {
                $data['dependentRequired'] = null;
            }
            if ($object->isInitialized('const') && null !== $object->getConst()) {
                $data['const'] = $object->getConst();
            }
            else {
                $data['const'] = null;
            }
            if ($object->isInitialized('enum') && null !== $object->getEnum()) {
                $values_17 = [];
                foreach ($object->getEnum() as $value_39) {
                    $values_17[] = $value_39;
                }
                $data['enum'] = $values_17;
            }
            else {
                $data['enum'] = null;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $value_40 = $object->getType();
                if (is_array($object->getType())) {
                    $values_18 = [];
                    foreach ($object->getType() as $value_41) {
                        $values_18[] = $value_41;
                    }
                    $value_40 = $values_18;
                } elseif (!is_null($object->getType())) {
                    $value_40 = $object->getType();
                }
                $data['type'] = $value_40;
            }
            else {
                $data['type'] = null;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class => false];
        }
    }
} else {
    class JsonSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class;
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return $data instanceof \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('$recursiveAnchor', $data) && \is_int($data['$recursiveAnchor'])) {
                $data['$recursiveAnchor'] = (bool) $data['$recursiveAnchor'];
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
            if (\array_key_exists('uniqueItems', $data) && \is_int($data['uniqueItems'])) {
                $data['uniqueItems'] = (bool) $data['uniqueItems'];
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('definitions') && null !== $object->getDefinitions()) {
                $values = [];
                foreach ($object->getDefinitions() as $key => $value) {
                    $value_1 = $value;
                    if (is_object($value)) {
                        $value_1 = $this->normalizer->normalize($value, 'json', $context);
                    } elseif (is_bool($value)) {
                        $value_1 = $value;
                    }
                    $values[$key] = $value_1;
                }
                $data['definitions'] = $values;
            }
            else {
                $data['definitions'] = null;
            }
            if ($object->isInitialized('dependencies') && null !== $object->getDependencies()) {
                $values_1 = [];
                foreach ($object->getDependencies() as $key_1 => $value_2) {
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
                $data['dependencies'] = $values_1;
            }
            else {
                $data['dependencies'] = null;
            }
            if ($object->isInitialized('additionalItems') && null !== $object->getAdditionalItems()) {
                $value_5 = $object->getAdditionalItems();
                if (is_object($object->getAdditionalItems())) {
                    $value_5 = $this->normalizer->normalize($object->getAdditionalItems(), 'json', $context);
                } elseif (is_bool($object->getAdditionalItems())) {
                    $value_5 = $object->getAdditionalItems();
                }
                $data['additionalItems'] = $value_5;
            }
            else {
                $data['additionalItems'] = null;
            }
            if ($object->isInitialized('unevaluatedItems') && null !== $object->getUnevaluatedItems()) {
                $value_6 = $object->getUnevaluatedItems();
                if (is_object($object->getUnevaluatedItems())) {
                    $value_6 = $this->normalizer->normalize($object->getUnevaluatedItems(), 'json', $context);
                } elseif (is_bool($object->getUnevaluatedItems())) {
                    $value_6 = $object->getUnevaluatedItems();
                }
                $data['unevaluatedItems'] = $value_6;
            }
            else {
                $data['unevaluatedItems'] = null;
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $value_7 = $object->getItems();
                if (is_object($object->getItems())) {
                    $value_7 = $this->normalizer->normalize($object->getItems(), 'json', $context);
                } elseif (is_bool($object->getItems())) {
                    $value_7 = $object->getItems();
                } elseif (is_array($object->getItems())) {
                    $values_3 = [];
                    foreach ($object->getItems() as $value_8) {
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
                $data['items'] = $value_7;
            }
            else {
                $data['items'] = null;
            }
            if ($object->isInitialized('contains') && null !== $object->getContains()) {
                $value_10 = $object->getContains();
                if (is_object($object->getContains())) {
                    $value_10 = $this->normalizer->normalize($object->getContains(), 'json', $context);
                } elseif (is_bool($object->getContains())) {
                    $value_10 = $object->getContains();
                }
                $data['contains'] = $value_10;
            }
            else {
                $data['contains'] = null;
            }
            if ($object->isInitialized('additionalProperties') && null !== $object->getAdditionalProperties()) {
                $value_11 = $object->getAdditionalProperties();
                if (is_object($object->getAdditionalProperties())) {
                    $value_11 = $this->normalizer->normalize($object->getAdditionalProperties(), 'json', $context);
                } elseif (is_bool($object->getAdditionalProperties())) {
                    $value_11 = $object->getAdditionalProperties();
                }
                $data['additionalProperties'] = $value_11;
            }
            else {
                $data['additionalProperties'] = null;
            }
            if ($object->isInitialized('unevaluatedProperties') && null !== $object->getUnevaluatedProperties()) {
                $values_4 = [];
                foreach ($object->getUnevaluatedProperties() as $key_2 => $value_12) {
                    $value_13 = $value_12;
                    if (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    } elseif (is_bool($value_12)) {
                        $value_13 = $value_12;
                    }
                    $values_4[$key_2] = $value_13;
                }
                $data['unevaluatedProperties'] = $values_4;
            }
            else {
                $data['unevaluatedProperties'] = null;
            }
            if ($object->isInitialized('properties') && null !== $object->getProperties()) {
                $values_5 = [];
                foreach ($object->getProperties() as $key_3 => $value_14) {
                    $value_15 = $value_14;
                    if (is_object($value_14)) {
                        $value_15 = $this->normalizer->normalize($value_14, 'json', $context);
                    } elseif (is_bool($value_14)) {
                        $value_15 = $value_14;
                    }
                    $values_5[$key_3] = $value_15;
                }
                $data['properties'] = $values_5;
            }
            else {
                $data['properties'] = null;
            }
            if ($object->isInitialized('patternProperties') && null !== $object->getPatternProperties()) {
                $values_6 = [];
                foreach ($object->getPatternProperties() as $key_4 => $value_16) {
                    $value_17 = $value_16;
                    if (is_object($value_16)) {
                        $value_17 = $this->normalizer->normalize($value_16, 'json', $context);
                    } elseif (is_bool($value_16)) {
                        $value_17 = $value_16;
                    }
                    $values_6[$key_4] = $value_17;
                }
                $data['patternProperties'] = $values_6;
            }
            else {
                $data['patternProperties'] = null;
            }
            if ($object->isInitialized('dependentSchemas') && null !== $object->getDependentSchemas()) {
                $values_7 = [];
                foreach ($object->getDependentSchemas() as $key_5 => $value_18) {
                    $value_19 = $value_18;
                    if (is_object($value_18)) {
                        $value_19 = $this->normalizer->normalize($value_18, 'json', $context);
                    } elseif (is_bool($value_18)) {
                        $value_19 = $value_18;
                    }
                    $values_7[$key_5] = $value_19;
                }
                $data['dependentSchemas'] = $values_7;
            }
            else {
                $data['dependentSchemas'] = null;
            }
            if ($object->isInitialized('propertyNames') && null !== $object->getPropertyNames()) {
                $value_20 = $object->getPropertyNames();
                if (is_object($object->getPropertyNames())) {
                    $value_20 = $this->normalizer->normalize($object->getPropertyNames(), 'json', $context);
                } elseif (is_bool($object->getPropertyNames())) {
                    $value_20 = $object->getPropertyNames();
                }
                $data['propertyNames'] = $value_20;
            }
            else {
                $data['propertyNames'] = null;
            }
            if ($object->isInitialized('if') && null !== $object->getIf()) {
                $value_21 = $object->getIf();
                if (is_object($object->getIf())) {
                    $value_21 = $this->normalizer->normalize($object->getIf(), 'json', $context);
                } elseif (is_bool($object->getIf())) {
                    $value_21 = $object->getIf();
                }
                $data['if'] = $value_21;
            }
            else {
                $data['if'] = null;
            }
            if ($object->isInitialized('then') && null !== $object->getThen()) {
                $value_22 = $object->getThen();
                if (is_object($object->getThen())) {
                    $value_22 = $this->normalizer->normalize($object->getThen(), 'json', $context);
                } elseif (is_bool($object->getThen())) {
                    $value_22 = $object->getThen();
                }
                $data['then'] = $value_22;
            }
            else {
                $data['then'] = null;
            }
            if ($object->isInitialized('else') && null !== $object->getElse()) {
                $value_23 = $object->getElse();
                if (is_object($object->getElse())) {
                    $value_23 = $this->normalizer->normalize($object->getElse(), 'json', $context);
                } elseif (is_bool($object->getElse())) {
                    $value_23 = $object->getElse();
                }
                $data['else'] = $value_23;
            }
            else {
                $data['else'] = null;
            }
            if ($object->isInitialized('allOf') && null !== $object->getAllOf()) {
                $values_8 = [];
                foreach ($object->getAllOf() as $value_24) {
                    $value_25 = $value_24;
                    if (is_object($value_24)) {
                        $value_25 = $this->normalizer->normalize($value_24, 'json', $context);
                    } elseif (is_bool($value_24)) {
                        $value_25 = $value_24;
                    }
                    $values_8[] = $value_25;
                }
                $data['allOf'] = $values_8;
            }
            else {
                $data['allOf'] = null;
            }
            if ($object->isInitialized('anyOf') && null !== $object->getAnyOf()) {
                $values_9 = [];
                foreach ($object->getAnyOf() as $value_26) {
                    $value_27 = $value_26;
                    if (is_object($value_26)) {
                        $value_27 = $this->normalizer->normalize($value_26, 'json', $context);
                    } elseif (is_bool($value_26)) {
                        $value_27 = $value_26;
                    }
                    $values_9[] = $value_27;
                }
                $data['anyOf'] = $values_9;
            }
            else {
                $data['anyOf'] = null;
            }
            if ($object->isInitialized('oneOf') && null !== $object->getOneOf()) {
                $values_10 = [];
                foreach ($object->getOneOf() as $value_28) {
                    $value_29 = $value_28;
                    if (is_object($value_28)) {
                        $value_29 = $this->normalizer->normalize($value_28, 'json', $context);
                    } elseif (is_bool($value_28)) {
                        $value_29 = $value_28;
                    }
                    $values_10[] = $value_29;
                }
                $data['oneOf'] = $values_10;
            }
            else {
                $data['oneOf'] = null;
            }
            if ($object->isInitialized('not') && null !== $object->getNot()) {
                $value_30 = $object->getNot();
                if (is_object($object->getNot())) {
                    $value_30 = $this->normalizer->normalize($object->getNot(), 'json', $context);
                } elseif (is_bool($object->getNot())) {
                    $value_30 = $object->getNot();
                }
                $data['not'] = $value_30;
            }
            else {
                $data['not'] = null;
            }
            if ($object->isInitialized('contentMediaType') && null !== $object->getContentMediaType()) {
                $data['contentMediaType'] = $object->getContentMediaType();
            }
            else {
                $data['contentMediaType'] = null;
            }
            if ($object->isInitialized('contentEncoding') && null !== $object->getContentEncoding()) {
                $data['contentEncoding'] = $object->getContentEncoding();
            }
            else {
                $data['contentEncoding'] = null;
            }
            if ($object->isInitialized('contentSchema') && null !== $object->getContentSchema()) {
                $value_31 = $object->getContentSchema();
                if (is_object($object->getContentSchema())) {
                    $value_31 = $this->normalizer->normalize($object->getContentSchema(), 'json', $context);
                } elseif (is_bool($object->getContentSchema())) {
                    $value_31 = $object->getContentSchema();
                }
                $data['contentSchema'] = $value_31;
            }
            else {
                $data['contentSchema'] = null;
            }
            if ($object->isInitialized('dollarId') && null !== $object->getDollarId()) {
                $data['$id'] = $object->getDollarId();
            }
            else {
                $data['$id'] = null;
            }
            if ($object->isInitialized('dollarSchema') && null !== $object->getDollarSchema()) {
                $data['$schema'] = $object->getDollarSchema();
            }
            else {
                $data['$schema'] = null;
            }
            if ($object->isInitialized('dollarAnchor') && null !== $object->getDollarAnchor()) {
                $data['$anchor'] = $object->getDollarAnchor();
            }
            else {
                $data['$anchor'] = null;
            }
            if ($object->isInitialized('dollarRef') && null !== $object->getDollarRef()) {
                $data['$ref'] = $object->getDollarRef();
            }
            else {
                $data['$ref'] = null;
            }
            if ($object->isInitialized('dollarRecursiveRef') && null !== $object->getDollarRecursiveRef()) {
                $data['$recursiveRef'] = $object->getDollarRecursiveRef();
            }
            else {
                $data['$recursiveRef'] = null;
            }
            if ($object->isInitialized('dollarRecursiveAnchor') && null !== $object->getDollarRecursiveAnchor()) {
                $data['$recursiveAnchor'] = $object->getDollarRecursiveAnchor();
            }
            else {
                $data['$recursiveAnchor'] = null;
            }
            if ($object->isInitialized('dollarVocabulary') && null !== $object->getDollarVocabulary()) {
                $values_11 = [];
                foreach ($object->getDollarVocabulary() as $key_6 => $value_32) {
                    $values_11[$key_6] = $value_32;
                }
                $data['$vocabulary'] = $values_11;
            }
            else {
                $data['$vocabulary'] = null;
            }
            if ($object->isInitialized('dollarComment') && null !== $object->getDollarComment()) {
                $data['$comment'] = $object->getDollarComment();
            }
            else {
                $data['$comment'] = null;
            }
            if ($object->isInitialized('dollarDefs') && null !== $object->getDollarDefs()) {
                $values_12 = [];
                foreach ($object->getDollarDefs() as $key_7 => $value_33) {
                    $value_34 = $value_33;
                    if (is_object($value_33)) {
                        $value_34 = $this->normalizer->normalize($value_33, 'json', $context);
                    } elseif (is_bool($value_33)) {
                        $value_34 = $value_33;
                    }
                    $values_12[$key_7] = $value_34;
                }
                $data['$defs'] = $values_12;
            }
            else {
                $data['$defs'] = null;
            }
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            else {
                $data['format'] = null;
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            else {
                $data['title'] = null;
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            else {
                $data['description'] = null;
            }
            if ($object->isInitialized('default') && null !== $object->getDefault()) {
                $data['default'] = $object->getDefault();
            }
            else {
                $data['default'] = null;
            }
            if ($object->isInitialized('deprecated') && null !== $object->getDeprecated()) {
                $data['deprecated'] = $object->getDeprecated();
            }
            else {
                $data['deprecated'] = null;
            }
            if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
                $data['readOnly'] = $object->getReadOnly();
            }
            else {
                $data['readOnly'] = null;
            }
            if ($object->isInitialized('writeOnly') && null !== $object->getWriteOnly()) {
                $data['writeOnly'] = $object->getWriteOnly();
            }
            else {
                $data['writeOnly'] = null;
            }
            if ($object->isInitialized('examples') && null !== $object->getExamples()) {
                $values_13 = [];
                foreach ($object->getExamples() as $value_35) {
                    $values_13[] = $value_35;
                }
                $data['examples'] = $values_13;
            }
            else {
                $data['examples'] = null;
            }
            if ($object->isInitialized('multipleOf') && null !== $object->getMultipleOf()) {
                $data['multipleOf'] = $object->getMultipleOf();
            }
            else {
                $data['multipleOf'] = null;
            }
            if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
                $data['maximum'] = $object->getMaximum();
            }
            else {
                $data['maximum'] = null;
            }
            if ($object->isInitialized('exclusiveMaximum') && null !== $object->getExclusiveMaximum()) {
                $data['exclusiveMaximum'] = $object->getExclusiveMaximum();
            }
            else {
                $data['exclusiveMaximum'] = null;
            }
            if ($object->isInitialized('minimum') && null !== $object->getMinimum()) {
                $data['minimum'] = $object->getMinimum();
            }
            else {
                $data['minimum'] = null;
            }
            if ($object->isInitialized('exclusiveMinimum') && null !== $object->getExclusiveMinimum()) {
                $data['exclusiveMinimum'] = $object->getExclusiveMinimum();
            }
            else {
                $data['exclusiveMinimum'] = null;
            }
            if ($object->isInitialized('maxLength') && null !== $object->getMaxLength()) {
                $data['maxLength'] = $object->getMaxLength();
            }
            else {
                $data['maxLength'] = null;
            }
            if ($object->isInitialized('minLength') && null !== $object->getMinLength()) {
                $data['minLength'] = $object->getMinLength();
            }
            else {
                $data['minLength'] = null;
            }
            if ($object->isInitialized('pattern') && null !== $object->getPattern()) {
                $data['pattern'] = $object->getPattern();
            }
            else {
                $data['pattern'] = null;
            }
            if ($object->isInitialized('maxItems') && null !== $object->getMaxItems()) {
                $data['maxItems'] = $object->getMaxItems();
            }
            else {
                $data['maxItems'] = null;
            }
            if ($object->isInitialized('minItems') && null !== $object->getMinItems()) {
                $data['minItems'] = $object->getMinItems();
            }
            else {
                $data['minItems'] = null;
            }
            if ($object->isInitialized('uniqueItems') && null !== $object->getUniqueItems()) {
                $data['uniqueItems'] = $object->getUniqueItems();
            }
            else {
                $data['uniqueItems'] = null;
            }
            if ($object->isInitialized('maxContains') && null !== $object->getMaxContains()) {
                $data['maxContains'] = $object->getMaxContains();
            }
            else {
                $data['maxContains'] = null;
            }
            if ($object->isInitialized('minContains') && null !== $object->getMinContains()) {
                $data['minContains'] = $object->getMinContains();
            }
            else {
                $data['minContains'] = null;
            }
            if ($object->isInitialized('maxProperties') && null !== $object->getMaxProperties()) {
                $data['maxProperties'] = $object->getMaxProperties();
            }
            else {
                $data['maxProperties'] = null;
            }
            if ($object->isInitialized('minProperties') && null !== $object->getMinProperties()) {
                $data['minProperties'] = $object->getMinProperties();
            }
            else {
                $data['minProperties'] = null;
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $values_14 = [];
                foreach ($object->getRequired() as $value_36) {
                    $values_14[] = $value_36;
                }
                $data['required'] = $values_14;
            }
            else {
                $data['required'] = null;
            }
            if ($object->isInitialized('dependentRequired') && null !== $object->getDependentRequired()) {
                $values_15 = [];
                foreach ($object->getDependentRequired() as $key_8 => $value_37) {
                    $values_16 = [];
                    foreach ($value_37 as $value_38) {
                        $values_16[] = $value_38;
                    }
                    $values_15[$key_8] = $values_16;
                }
                $data['dependentRequired'] = $values_15;
            }
            else {
                $data['dependentRequired'] = null;
            }
            if ($object->isInitialized('const') && null !== $object->getConst()) {
                $data['const'] = $object->getConst();
            }
            else {
                $data['const'] = null;
            }
            if ($object->isInitialized('enum') && null !== $object->getEnum()) {
                $values_17 = [];
                foreach ($object->getEnum() as $value_39) {
                    $values_17[] = $value_39;
                }
                $data['enum'] = $values_17;
            }
            else {
                $data['enum'] = null;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $value_40 = $object->getType();
                if (is_array($object->getType())) {
                    $values_18 = [];
                    foreach ($object->getType() as $value_41) {
                        $values_18[] = $value_41;
                    }
                    $value_40 = $values_18;
                } elseif (!is_null($object->getType())) {
                    $value_40 = $object->getType();
                }
                $data['type'] = $value_40;
            }
            else {
                $data['type'] = null;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class => false];
        }
    }
}