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
            $object->dollarId = $data['$id'];
            unset($data['$id']);
        }
        elseif (\array_key_exists('$id', $data) && $data['$id'] === null) {
            $object->dollarId = null;
            unset($data['$id']);
        }
        if (\array_key_exists('$schema', $data) && $data['$schema'] !== null) {
            $object->dollarSchema = $data['$schema'];
            unset($data['$schema']);
        }
        elseif (\array_key_exists('$schema', $data) && $data['$schema'] === null) {
            $object->dollarSchema = null;
            unset($data['$schema']);
        }
        if (\array_key_exists('$ref', $data) && $data['$ref'] !== null) {
            $object->dollarRef = $data['$ref'];
            unset($data['$ref']);
        }
        elseif (\array_key_exists('$ref', $data) && $data['$ref'] === null) {
            $object->dollarRef = null;
            unset($data['$ref']);
        }
        if (\array_key_exists('$anchor', $data) && $data['$anchor'] !== null) {
            $object->dollarAnchor = $data['$anchor'];
            unset($data['$anchor']);
        }
        elseif (\array_key_exists('$anchor', $data) && $data['$anchor'] === null) {
            $object->dollarAnchor = null;
            unset($data['$anchor']);
        }
        if (\array_key_exists('$dynamicRef', $data) && $data['$dynamicRef'] !== null) {
            $object->dollarDynamicRef = $data['$dynamicRef'];
            unset($data['$dynamicRef']);
        }
        elseif (\array_key_exists('$dynamicRef', $data) && $data['$dynamicRef'] === null) {
            $object->dollarDynamicRef = null;
            unset($data['$dynamicRef']);
        }
        if (\array_key_exists('$dynamicAnchor', $data) && $data['$dynamicAnchor'] !== null) {
            $object->dollarDynamicAnchor = $data['$dynamicAnchor'];
            unset($data['$dynamicAnchor']);
        }
        elseif (\array_key_exists('$dynamicAnchor', $data) && $data['$dynamicAnchor'] === null) {
            $object->dollarDynamicAnchor = null;
            unset($data['$dynamicAnchor']);
        }
        if (\array_key_exists('$vocabulary', $data) && $data['$vocabulary'] !== null) {
            $values = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data['$vocabulary'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->dollarVocabulary = $values;
            unset($data['$vocabulary']);
        }
        elseif (\array_key_exists('$vocabulary', $data) && $data['$vocabulary'] === null) {
            $object->dollarVocabulary = null;
            unset($data['$vocabulary']);
        }
        if (\array_key_exists('$comment', $data) && $data['$comment'] !== null) {
            $object->dollarComment = $data['$comment'];
            unset($data['$comment']);
        }
        elseif (\array_key_exists('$comment', $data) && $data['$comment'] === null) {
            $object->dollarComment = null;
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
            $object->dollarDefs = $values_1;
            unset($data['$defs']);
        }
        elseif (\array_key_exists('$defs', $data) && $data['$defs'] === null) {
            $object->dollarDefs = null;
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
            $object->prefixItems = $values_2;
            unset($data['prefixItems']);
        }
        elseif (\array_key_exists('prefixItems', $data) && $data['prefixItems'] === null) {
            $object->prefixItems = null;
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
            $object->items = $value_5;
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->items = null;
            unset($data['items']);
        }
        if (\array_key_exists('contains', $data) && $data['contains'] !== null) {
            $value_8 = $data['contains'];
            if (is_array($data['contains'])) {
                $value_8 = $this->denormalizer->denormalize($data['contains'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['contains'])) {
                $value_8 = $data['contains'];
            }
            $object->contains = $value_8;
            unset($data['contains']);
        }
        elseif (\array_key_exists('contains', $data) && $data['contains'] === null) {
            $object->contains = null;
            unset($data['contains']);
        }
        if (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] !== null) {
            $value_9 = $data['additionalProperties'];
            if (is_array($data['additionalProperties'])) {
                $value_9 = $this->denormalizer->denormalize($data['additionalProperties'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['additionalProperties'])) {
                $value_9 = $data['additionalProperties'];
            }
            $object->additionalProperties = $value_9;
            unset($data['additionalProperties']);
        }
        elseif (\array_key_exists('additionalProperties', $data) && $data['additionalProperties'] === null) {
            $object->additionalProperties = null;
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
            $object->properties = $values_4;
            unset($data['properties']);
        }
        elseif (\array_key_exists('properties', $data) && $data['properties'] === null) {
            $object->properties = null;
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
            $object->patternProperties = $values_5;
            unset($data['patternProperties']);
        }
        elseif (\array_key_exists('patternProperties', $data) && $data['patternProperties'] === null) {
            $object->patternProperties = null;
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
            $object->dependentSchemas = $values_6;
            unset($data['dependentSchemas']);
        }
        elseif (\array_key_exists('dependentSchemas', $data) && $data['dependentSchemas'] === null) {
            $object->dependentSchemas = null;
            unset($data['dependentSchemas']);
        }
        if (\array_key_exists('propertyNames', $data) && $data['propertyNames'] !== null) {
            $value_16 = $data['propertyNames'];
            if (is_array($data['propertyNames'])) {
                $value_16 = $this->denormalizer->denormalize($data['propertyNames'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['propertyNames'])) {
                $value_16 = $data['propertyNames'];
            }
            $object->propertyNames = $value_16;
            unset($data['propertyNames']);
        }
        elseif (\array_key_exists('propertyNames', $data) && $data['propertyNames'] === null) {
            $object->propertyNames = null;
            unset($data['propertyNames']);
        }
        if (\array_key_exists('if', $data) && $data['if'] !== null) {
            $value_17 = $data['if'];
            if (is_array($data['if'])) {
                $value_17 = $this->denormalizer->denormalize($data['if'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['if'])) {
                $value_17 = $data['if'];
            }
            $object->if = $value_17;
            unset($data['if']);
        }
        elseif (\array_key_exists('if', $data) && $data['if'] === null) {
            $object->if = null;
            unset($data['if']);
        }
        if (\array_key_exists('then', $data) && $data['then'] !== null) {
            $value_18 = $data['then'];
            if (is_array($data['then'])) {
                $value_18 = $this->denormalizer->denormalize($data['then'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['then'])) {
                $value_18 = $data['then'];
            }
            $object->then = $value_18;
            unset($data['then']);
        }
        elseif (\array_key_exists('then', $data) && $data['then'] === null) {
            $object->then = null;
            unset($data['then']);
        }
        if (\array_key_exists('else', $data) && $data['else'] !== null) {
            $value_19 = $data['else'];
            if (is_array($data['else'])) {
                $value_19 = $this->denormalizer->denormalize($data['else'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['else'])) {
                $value_19 = $data['else'];
            }
            $object->else = $value_19;
            unset($data['else']);
        }
        elseif (\array_key_exists('else', $data) && $data['else'] === null) {
            $object->else = null;
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
            $object->allOf = $values_7;
            unset($data['allOf']);
        }
        elseif (\array_key_exists('allOf', $data) && $data['allOf'] === null) {
            $object->allOf = null;
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
            $object->anyOf = $values_8;
            unset($data['anyOf']);
        }
        elseif (\array_key_exists('anyOf', $data) && $data['anyOf'] === null) {
            $object->anyOf = null;
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
            $object->oneOf = $values_9;
            unset($data['oneOf']);
        }
        elseif (\array_key_exists('oneOf', $data) && $data['oneOf'] === null) {
            $object->oneOf = null;
            unset($data['oneOf']);
        }
        if (\array_key_exists('not', $data) && $data['not'] !== null) {
            $value_26 = $data['not'];
            if (is_array($data['not'])) {
                $value_26 = $this->denormalizer->denormalize($data['not'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['not'])) {
                $value_26 = $data['not'];
            }
            $object->not = $value_26;
            unset($data['not']);
        }
        elseif (\array_key_exists('not', $data) && $data['not'] === null) {
            $object->not = null;
            unset($data['not']);
        }
        if (\array_key_exists('unevaluatedItems', $data) && $data['unevaluatedItems'] !== null) {
            $value_27 = $data['unevaluatedItems'];
            if (is_array($data['unevaluatedItems'])) {
                $value_27 = $this->denormalizer->denormalize($data['unevaluatedItems'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['unevaluatedItems'])) {
                $value_27 = $data['unevaluatedItems'];
            }
            $object->unevaluatedItems = $value_27;
            unset($data['unevaluatedItems']);
        }
        elseif (\array_key_exists('unevaluatedItems', $data) && $data['unevaluatedItems'] === null) {
            $object->unevaluatedItems = null;
            unset($data['unevaluatedItems']);
        }
        if (\array_key_exists('unevaluatedProperties', $data) && $data['unevaluatedProperties'] !== null) {
            $value_28 = $data['unevaluatedProperties'];
            if (is_array($data['unevaluatedProperties'])) {
                $value_28 = $this->denormalizer->denormalize($data['unevaluatedProperties'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['unevaluatedProperties'])) {
                $value_28 = $data['unevaluatedProperties'];
            }
            $object->unevaluatedProperties = $value_28;
            unset($data['unevaluatedProperties']);
        }
        elseif (\array_key_exists('unevaluatedProperties', $data) && $data['unevaluatedProperties'] === null) {
            $object->unevaluatedProperties = null;
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
            $object->type = $value_29;
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->type = null;
            unset($data['type']);
        }
        if (\array_key_exists('const', $data) && $data['const'] !== null) {
            $object->const = $data['const'];
            unset($data['const']);
        }
        elseif (\array_key_exists('const', $data) && $data['const'] === null) {
            $object->const = null;
            unset($data['const']);
        }
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $values_11 = [];
            foreach ($data['enum'] as $value_31) {
                $values_11[] = $value_31;
            }
            $object->enum = $values_11;
            unset($data['enum']);
        }
        elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->enum = null;
            unset($data['enum']);
        }
        if (\array_key_exists('multipleOf', $data) && $data['multipleOf'] !== null) {
            $object->multipleOf = $data['multipleOf'];
            unset($data['multipleOf']);
        }
        elseif (\array_key_exists('multipleOf', $data) && $data['multipleOf'] === null) {
            $object->multipleOf = null;
            unset($data['multipleOf']);
        }
        if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
            $object->maximum = $data['maximum'];
            unset($data['maximum']);
        }
        elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
            $object->maximum = null;
            unset($data['maximum']);
        }
        if (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] !== null) {
            $object->exclusiveMaximum = $data['exclusiveMaximum'];
            unset($data['exclusiveMaximum']);
        }
        elseif (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] === null) {
            $object->exclusiveMaximum = null;
            unset($data['exclusiveMaximum']);
        }
        if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
            $object->minimum = $data['minimum'];
            unset($data['minimum']);
        }
        elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
            $object->minimum = null;
            unset($data['minimum']);
        }
        if (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] !== null) {
            $object->exclusiveMinimum = $data['exclusiveMinimum'];
            unset($data['exclusiveMinimum']);
        }
        elseif (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] === null) {
            $object->exclusiveMinimum = null;
            unset($data['exclusiveMinimum']);
        }
        if (\array_key_exists('maxLength', $data) && $data['maxLength'] !== null) {
            $object->maxLength = $data['maxLength'];
            unset($data['maxLength']);
        }
        elseif (\array_key_exists('maxLength', $data) && $data['maxLength'] === null) {
            $object->maxLength = null;
            unset($data['maxLength']);
        }
        if (\array_key_exists('minLength', $data) && $data['minLength'] !== null) {
            $object->minLength = $data['minLength'];
            unset($data['minLength']);
        }
        elseif (\array_key_exists('minLength', $data) && $data['minLength'] === null) {
            $object->minLength = null;
            unset($data['minLength']);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->pattern = $data['pattern'];
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->pattern = null;
            unset($data['pattern']);
        }
        if (\array_key_exists('maxItems', $data) && $data['maxItems'] !== null) {
            $object->maxItems = $data['maxItems'];
            unset($data['maxItems']);
        }
        elseif (\array_key_exists('maxItems', $data) && $data['maxItems'] === null) {
            $object->maxItems = null;
            unset($data['maxItems']);
        }
        if (\array_key_exists('minItems', $data) && $data['minItems'] !== null) {
            $object->minItems = $data['minItems'];
            unset($data['minItems']);
        }
        elseif (\array_key_exists('minItems', $data) && $data['minItems'] === null) {
            $object->minItems = null;
            unset($data['minItems']);
        }
        if (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] !== null) {
            $object->uniqueItems = $data['uniqueItems'];
            unset($data['uniqueItems']);
        }
        elseif (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] === null) {
            $object->uniqueItems = null;
            unset($data['uniqueItems']);
        }
        if (\array_key_exists('maxContains', $data) && $data['maxContains'] !== null) {
            $object->maxContains = $data['maxContains'];
            unset($data['maxContains']);
        }
        elseif (\array_key_exists('maxContains', $data) && $data['maxContains'] === null) {
            $object->maxContains = null;
            unset($data['maxContains']);
        }
        if (\array_key_exists('minContains', $data) && $data['minContains'] !== null) {
            $object->minContains = $data['minContains'];
            unset($data['minContains']);
        }
        elseif (\array_key_exists('minContains', $data) && $data['minContains'] === null) {
            $object->minContains = null;
            unset($data['minContains']);
        }
        if (\array_key_exists('maxProperties', $data) && $data['maxProperties'] !== null) {
            $object->maxProperties = $data['maxProperties'];
            unset($data['maxProperties']);
        }
        elseif (\array_key_exists('maxProperties', $data) && $data['maxProperties'] === null) {
            $object->maxProperties = null;
            unset($data['maxProperties']);
        }
        if (\array_key_exists('minProperties', $data) && $data['minProperties'] !== null) {
            $object->minProperties = $data['minProperties'];
            unset($data['minProperties']);
        }
        elseif (\array_key_exists('minProperties', $data) && $data['minProperties'] === null) {
            $object->minProperties = null;
            unset($data['minProperties']);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $values_12 = [];
            foreach ($data['required'] as $value_32) {
                $values_12[] = $value_32;
            }
            $object->required = $values_12;
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->required = null;
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
            $object->dependentRequired = $values_13;
            unset($data['dependentRequired']);
        }
        elseif (\array_key_exists('dependentRequired', $data) && $data['dependentRequired'] === null) {
            $object->dependentRequired = null;
            unset($data['dependentRequired']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->title = $data['title'];
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->title = null;
            unset($data['title']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->description = null;
            unset($data['description']);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->default = $data['default'];
            unset($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->default = null;
            unset($data['default']);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->deprecated = $data['deprecated'];
            unset($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->deprecated = null;
            unset($data['deprecated']);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->readOnly = $data['readOnly'];
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->readOnly = null;
            unset($data['readOnly']);
        }
        if (\array_key_exists('writeOnly', $data) && $data['writeOnly'] !== null) {
            $object->writeOnly = $data['writeOnly'];
            unset($data['writeOnly']);
        }
        elseif (\array_key_exists('writeOnly', $data) && $data['writeOnly'] === null) {
            $object->writeOnly = null;
            unset($data['writeOnly']);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values_15 = [];
            foreach ($data['examples'] as $value_35) {
                $values_15[] = $value_35;
            }
            $object->examples = $values_15;
            unset($data['examples']);
        }
        elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->examples = null;
            unset($data['examples']);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->format = $data['format'];
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->format = null;
            unset($data['format']);
        }
        if (\array_key_exists('contentEncoding', $data) && $data['contentEncoding'] !== null) {
            $object->contentEncoding = $data['contentEncoding'];
            unset($data['contentEncoding']);
        }
        elseif (\array_key_exists('contentEncoding', $data) && $data['contentEncoding'] === null) {
            $object->contentEncoding = null;
            unset($data['contentEncoding']);
        }
        if (\array_key_exists('contentMediaType', $data) && $data['contentMediaType'] !== null) {
            $object->contentMediaType = $data['contentMediaType'];
            unset($data['contentMediaType']);
        }
        elseif (\array_key_exists('contentMediaType', $data) && $data['contentMediaType'] === null) {
            $object->contentMediaType = null;
            unset($data['contentMediaType']);
        }
        if (\array_key_exists('contentSchema', $data) && $data['contentSchema'] !== null) {
            $value_36 = $data['contentSchema'];
            if (is_array($data['contentSchema'])) {
                $value_36 = $this->denormalizer->denormalize($data['contentSchema'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['contentSchema'])) {
                $value_36 = $data['contentSchema'];
            }
            $object->contentSchema = $value_36;
            unset($data['contentSchema']);
        }
        elseif (\array_key_exists('contentSchema', $data) && $data['contentSchema'] === null) {
            $object->contentSchema = null;
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
            $object->definitions = $values_16;
            unset($data['definitions']);
        }
        elseif (\array_key_exists('definitions', $data) && $data['definitions'] === null) {
            $object->definitions = null;
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
            $object->dependencies = $values_17;
            unset($data['dependencies']);
        }
        elseif (\array_key_exists('dependencies', $data) && $data['dependencies'] === null) {
            $object->dependencies = null;
            unset($data['dependencies']);
        }
        if (\array_key_exists('$recursiveAnchor', $data) && $data['$recursiveAnchor'] !== null) {
            $object->dollarRecursiveAnchor = $data['$recursiveAnchor'];
            unset($data['$recursiveAnchor']);
        }
        elseif (\array_key_exists('$recursiveAnchor', $data) && $data['$recursiveAnchor'] === null) {
            $object->dollarRecursiveAnchor = null;
            unset($data['$recursiveAnchor']);
        }
        if (\array_key_exists('$recursiveRef', $data) && $data['$recursiveRef'] !== null) {
            $object->dollarRecursiveRef = $data['$recursiveRef'];
            unset($data['$recursiveRef']);
        }
        elseif (\array_key_exists('$recursiveRef', $data) && $data['$recursiveRef'] === null) {
            $object->dollarRecursiveRef = null;
            unset($data['$recursiveRef']);
        }
        if (\array_key_exists('additionalItems', $data) && $data['additionalItems'] !== null) {
            $value_42 = $data['additionalItems'];
            if (is_array($data['additionalItems'])) {
                $value_42 = $this->denormalizer->denormalize($data['additionalItems'], \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema::class, 'json', $context);
            } elseif (is_bool($data['additionalItems'])) {
                $value_42 = $data['additionalItems'];
            }
            $object->additionalItems = $value_42;
            unset($data['additionalItems']);
        }
        elseif (\array_key_exists('additionalItems', $data) && $data['additionalItems'] === null) {
            $object->additionalItems = null;
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
        if (array_key_exists('dollarId', get_object_vars($data)) && null !== ($data->dollarId ?? null)) {
            $dataArray['$id'] = $data->dollarId ?? null;
        }
        else {
            $dataArray['$id'] = null;
        }
        if (array_key_exists('dollarSchema', get_object_vars($data)) && null !== ($data->dollarSchema ?? null)) {
            $dataArray['$schema'] = $data->dollarSchema ?? null;
        }
        else {
            $dataArray['$schema'] = null;
        }
        if (array_key_exists('dollarRef', get_object_vars($data)) && null !== ($data->dollarRef ?? null)) {
            $dataArray['$ref'] = $data->dollarRef ?? null;
        }
        else {
            $dataArray['$ref'] = null;
        }
        if (array_key_exists('dollarAnchor', get_object_vars($data)) && null !== ($data->dollarAnchor ?? null)) {
            $dataArray['$anchor'] = $data->dollarAnchor ?? null;
        }
        else {
            $dataArray['$anchor'] = null;
        }
        if (array_key_exists('dollarDynamicRef', get_object_vars($data)) && null !== ($data->dollarDynamicRef ?? null)) {
            $dataArray['$dynamicRef'] = $data->dollarDynamicRef ?? null;
        }
        else {
            $dataArray['$dynamicRef'] = null;
        }
        if (array_key_exists('dollarDynamicAnchor', get_object_vars($data)) && null !== ($data->dollarDynamicAnchor ?? null)) {
            $dataArray['$dynamicAnchor'] = $data->dollarDynamicAnchor ?? null;
        }
        else {
            $dataArray['$dynamicAnchor'] = null;
        }
        if (array_key_exists('dollarVocabulary', get_object_vars($data)) && null !== ($data->dollarVocabulary ?? null)) {
            $values = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->dollarVocabulary ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['$vocabulary'] = $values;
        }
        else {
            $dataArray['$vocabulary'] = null;
        }
        if (array_key_exists('dollarComment', get_object_vars($data)) && null !== ($data->dollarComment ?? null)) {
            $dataArray['$comment'] = $data->dollarComment ?? null;
        }
        else {
            $dataArray['$comment'] = null;
        }
        if (array_key_exists('dollarDefs', get_object_vars($data)) && null !== ($data->dollarDefs ?? null)) {
            $values_1 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->dollarDefs ?? null as $key_1 => $value_1) {
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
        if (array_key_exists('prefixItems', get_object_vars($data)) && null !== ($data->prefixItems ?? null)) {
            $values_2 = [];
            foreach ($data->prefixItems ?? null as $value_3) {
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
        if (array_key_exists('items', get_object_vars($data)) && null !== ($data->items ?? null)) {
            $value_5 = $data->items ?? null;
            if (is_object($data->items ?? null)) {
                $value_5 = ($data->items ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->items ?? null, 'json', $context));
            } elseif (is_bool($data->items ?? null)) {
                $value_5 = $data->items ?? null;
            } elseif (is_array($data->items ?? null)) {
                $values_3 = [];
                foreach ($data->items ?? null as $value_6) {
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
        if (array_key_exists('contains', get_object_vars($data)) && null !== ($data->contains ?? null)) {
            $value_8 = $data->contains ?? null;
            if (is_object($data->contains ?? null)) {
                $value_8 = ($data->contains ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->contains ?? null, 'json', $context));
            } elseif (is_bool($data->contains ?? null)) {
                $value_8 = $data->contains ?? null;
            }
            $dataArray['contains'] = $value_8;
        }
        else {
            $dataArray['contains'] = null;
        }
        if (array_key_exists('additionalProperties', get_object_vars($data)) && null !== ($data->additionalProperties ?? null)) {
            $value_9 = $data->additionalProperties ?? null;
            if (is_object($data->additionalProperties ?? null)) {
                $value_9 = ($data->additionalProperties ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->additionalProperties ?? null, 'json', $context));
            } elseif (is_bool($data->additionalProperties ?? null)) {
                $value_9 = $data->additionalProperties ?? null;
            }
            $dataArray['additionalProperties'] = $value_9;
        }
        else {
            $dataArray['additionalProperties'] = null;
        }
        if (array_key_exists('properties', get_object_vars($data)) && null !== ($data->properties ?? null)) {
            $values_4 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->properties ?? null as $key_2 => $value_10) {
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
        if (array_key_exists('patternProperties', get_object_vars($data)) && null !== ($data->patternProperties ?? null)) {
            $values_5 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->patternProperties ?? null as $key_3 => $value_12) {
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
        if (array_key_exists('dependentSchemas', get_object_vars($data)) && null !== ($data->dependentSchemas ?? null)) {
            $values_6 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->dependentSchemas ?? null as $key_4 => $value_14) {
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
        if (array_key_exists('propertyNames', get_object_vars($data)) && null !== ($data->propertyNames ?? null)) {
            $value_16 = $data->propertyNames ?? null;
            if (is_object($data->propertyNames ?? null)) {
                $value_16 = ($data->propertyNames ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->propertyNames ?? null, 'json', $context));
            } elseif (is_bool($data->propertyNames ?? null)) {
                $value_16 = $data->propertyNames ?? null;
            }
            $dataArray['propertyNames'] = $value_16;
        }
        else {
            $dataArray['propertyNames'] = null;
        }
        if (array_key_exists('if', get_object_vars($data)) && null !== ($data->if ?? null)) {
            $value_17 = $data->if ?? null;
            if (is_object($data->if ?? null)) {
                $value_17 = ($data->if ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->if ?? null, 'json', $context));
            } elseif (is_bool($data->if ?? null)) {
                $value_17 = $data->if ?? null;
            }
            $dataArray['if'] = $value_17;
        }
        else {
            $dataArray['if'] = null;
        }
        if (array_key_exists('then', get_object_vars($data)) && null !== ($data->then ?? null)) {
            $value_18 = $data->then ?? null;
            if (is_object($data->then ?? null)) {
                $value_18 = ($data->then ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->then ?? null, 'json', $context));
            } elseif (is_bool($data->then ?? null)) {
                $value_18 = $data->then ?? null;
            }
            $dataArray['then'] = $value_18;
        }
        else {
            $dataArray['then'] = null;
        }
        if (array_key_exists('else', get_object_vars($data)) && null !== ($data->else ?? null)) {
            $value_19 = $data->else ?? null;
            if (is_object($data->else ?? null)) {
                $value_19 = ($data->else ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->else ?? null, 'json', $context));
            } elseif (is_bool($data->else ?? null)) {
                $value_19 = $data->else ?? null;
            }
            $dataArray['else'] = $value_19;
        }
        else {
            $dataArray['else'] = null;
        }
        if (array_key_exists('allOf', get_object_vars($data)) && null !== ($data->allOf ?? null)) {
            $values_7 = [];
            foreach ($data->allOf ?? null as $value_20) {
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
        if (array_key_exists('anyOf', get_object_vars($data)) && null !== ($data->anyOf ?? null)) {
            $values_8 = [];
            foreach ($data->anyOf ?? null as $value_22) {
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
        if (array_key_exists('oneOf', get_object_vars($data)) && null !== ($data->oneOf ?? null)) {
            $values_9 = [];
            foreach ($data->oneOf ?? null as $value_24) {
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
        if (array_key_exists('not', get_object_vars($data)) && null !== ($data->not ?? null)) {
            $value_26 = $data->not ?? null;
            if (is_object($data->not ?? null)) {
                $value_26 = ($data->not ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->not ?? null, 'json', $context));
            } elseif (is_bool($data->not ?? null)) {
                $value_26 = $data->not ?? null;
            }
            $dataArray['not'] = $value_26;
        }
        else {
            $dataArray['not'] = null;
        }
        if (array_key_exists('unevaluatedItems', get_object_vars($data)) && null !== ($data->unevaluatedItems ?? null)) {
            $value_27 = $data->unevaluatedItems ?? null;
            if (is_object($data->unevaluatedItems ?? null)) {
                $value_27 = ($data->unevaluatedItems ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->unevaluatedItems ?? null, 'json', $context));
            } elseif (is_bool($data->unevaluatedItems ?? null)) {
                $value_27 = $data->unevaluatedItems ?? null;
            }
            $dataArray['unevaluatedItems'] = $value_27;
        }
        else {
            $dataArray['unevaluatedItems'] = null;
        }
        if (array_key_exists('unevaluatedProperties', get_object_vars($data)) && null !== ($data->unevaluatedProperties ?? null)) {
            $value_28 = $data->unevaluatedProperties ?? null;
            if (is_object($data->unevaluatedProperties ?? null)) {
                $value_28 = ($data->unevaluatedProperties ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->unevaluatedProperties ?? null, 'json', $context));
            } elseif (is_bool($data->unevaluatedProperties ?? null)) {
                $value_28 = $data->unevaluatedProperties ?? null;
            }
            $dataArray['unevaluatedProperties'] = $value_28;
        }
        else {
            $dataArray['unevaluatedProperties'] = null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $value_29 = $data->type ?? null;
            if (is_array($data->type ?? null)) {
                $values_10 = [];
                foreach ($data->type ?? null as $value_30) {
                    $values_10[] = $value_30;
                }
                $value_29 = $values_10;
            } elseif (!is_null($data->type ?? null)) {
                $value_29 = $data->type ?? null;
            }
            $dataArray['type'] = $value_29;
        }
        else {
            $dataArray['type'] = null;
        }
        if (array_key_exists('const', get_object_vars($data)) && null !== ($data->const ?? null)) {
            $dataArray['const'] = $data->const ?? null;
        }
        else {
            $dataArray['const'] = null;
        }
        if (array_key_exists('enum', get_object_vars($data)) && null !== ($data->enum ?? null)) {
            $values_11 = [];
            foreach ($data->enum ?? null as $value_31) {
                $values_11[] = $value_31;
            }
            $dataArray['enum'] = $values_11;
        }
        else {
            $dataArray['enum'] = null;
        }
        if (array_key_exists('multipleOf', get_object_vars($data)) && null !== ($data->multipleOf ?? null)) {
            $dataArray['multipleOf'] = $data->multipleOf ?? null;
        }
        else {
            $dataArray['multipleOf'] = null;
        }
        if (array_key_exists('maximum', get_object_vars($data)) && null !== ($data->maximum ?? null)) {
            $dataArray['maximum'] = $data->maximum ?? null;
        }
        else {
            $dataArray['maximum'] = null;
        }
        if (array_key_exists('exclusiveMaximum', get_object_vars($data)) && null !== ($data->exclusiveMaximum ?? null)) {
            $dataArray['exclusiveMaximum'] = $data->exclusiveMaximum ?? null;
        }
        else {
            $dataArray['exclusiveMaximum'] = null;
        }
        if (array_key_exists('minimum', get_object_vars($data)) && null !== ($data->minimum ?? null)) {
            $dataArray['minimum'] = $data->minimum ?? null;
        }
        else {
            $dataArray['minimum'] = null;
        }
        if (array_key_exists('exclusiveMinimum', get_object_vars($data)) && null !== ($data->exclusiveMinimum ?? null)) {
            $dataArray['exclusiveMinimum'] = $data->exclusiveMinimum ?? null;
        }
        else {
            $dataArray['exclusiveMinimum'] = null;
        }
        if (array_key_exists('maxLength', get_object_vars($data)) && null !== ($data->maxLength ?? null)) {
            $dataArray['maxLength'] = $data->maxLength ?? null;
        }
        else {
            $dataArray['maxLength'] = null;
        }
        if (array_key_exists('minLength', get_object_vars($data)) && null !== ($data->minLength ?? null)) {
            $dataArray['minLength'] = $data->minLength ?? null;
        }
        else {
            $dataArray['minLength'] = null;
        }
        if (array_key_exists('pattern', get_object_vars($data)) && null !== ($data->pattern ?? null)) {
            $dataArray['pattern'] = $data->pattern ?? null;
        }
        else {
            $dataArray['pattern'] = null;
        }
        if (array_key_exists('maxItems', get_object_vars($data)) && null !== ($data->maxItems ?? null)) {
            $dataArray['maxItems'] = $data->maxItems ?? null;
        }
        else {
            $dataArray['maxItems'] = null;
        }
        if (array_key_exists('minItems', get_object_vars($data)) && null !== ($data->minItems ?? null)) {
            $dataArray['minItems'] = $data->minItems ?? null;
        }
        else {
            $dataArray['minItems'] = null;
        }
        if (array_key_exists('uniqueItems', get_object_vars($data)) && null !== ($data->uniqueItems ?? null)) {
            $dataArray['uniqueItems'] = $data->uniqueItems ?? null;
        }
        else {
            $dataArray['uniqueItems'] = null;
        }
        if (array_key_exists('maxContains', get_object_vars($data)) && null !== ($data->maxContains ?? null)) {
            $dataArray['maxContains'] = $data->maxContains ?? null;
        }
        else {
            $dataArray['maxContains'] = null;
        }
        if (array_key_exists('minContains', get_object_vars($data)) && null !== ($data->minContains ?? null)) {
            $dataArray['minContains'] = $data->minContains ?? null;
        }
        else {
            $dataArray['minContains'] = null;
        }
        if (array_key_exists('maxProperties', get_object_vars($data)) && null !== ($data->maxProperties ?? null)) {
            $dataArray['maxProperties'] = $data->maxProperties ?? null;
        }
        else {
            $dataArray['maxProperties'] = null;
        }
        if (array_key_exists('minProperties', get_object_vars($data)) && null !== ($data->minProperties ?? null)) {
            $dataArray['minProperties'] = $data->minProperties ?? null;
        }
        else {
            $dataArray['minProperties'] = null;
        }
        if (array_key_exists('required', get_object_vars($data)) && null !== ($data->required ?? null)) {
            $values_12 = [];
            foreach ($data->required ?? null as $value_32) {
                $values_12[] = $value_32;
            }
            $dataArray['required'] = $values_12;
        }
        else {
            $dataArray['required'] = null;
        }
        if (array_key_exists('dependentRequired', get_object_vars($data)) && null !== ($data->dependentRequired ?? null)) {
            $values_13 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->dependentRequired ?? null as $key_5 => $value_33) {
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
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title ?? null;
        }
        else {
            $dataArray['title'] = null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        else {
            $dataArray['description'] = null;
        }
        if (array_key_exists('default', get_object_vars($data)) && null !== ($data->default ?? null)) {
            $dataArray['default'] = $data->default ?? null;
        }
        else {
            $dataArray['default'] = null;
        }
        if (array_key_exists('deprecated', get_object_vars($data)) && null !== ($data->deprecated ?? null)) {
            $dataArray['deprecated'] = $data->deprecated ?? null;
        }
        else {
            $dataArray['deprecated'] = null;
        }
        if (array_key_exists('readOnly', get_object_vars($data)) && null !== ($data->readOnly ?? null)) {
            $dataArray['readOnly'] = $data->readOnly ?? null;
        }
        else {
            $dataArray['readOnly'] = null;
        }
        if (array_key_exists('writeOnly', get_object_vars($data)) && null !== ($data->writeOnly ?? null)) {
            $dataArray['writeOnly'] = $data->writeOnly ?? null;
        }
        else {
            $dataArray['writeOnly'] = null;
        }
        if (array_key_exists('examples', get_object_vars($data)) && null !== ($data->examples ?? null)) {
            $values_15 = [];
            foreach ($data->examples ?? null as $value_35) {
                $values_15[] = $value_35;
            }
            $dataArray['examples'] = $values_15;
        }
        else {
            $dataArray['examples'] = null;
        }
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $dataArray['format'] = $data->format ?? null;
        }
        else {
            $dataArray['format'] = null;
        }
        if (array_key_exists('contentEncoding', get_object_vars($data)) && null !== ($data->contentEncoding ?? null)) {
            $dataArray['contentEncoding'] = $data->contentEncoding ?? null;
        }
        else {
            $dataArray['contentEncoding'] = null;
        }
        if (array_key_exists('contentMediaType', get_object_vars($data)) && null !== ($data->contentMediaType ?? null)) {
            $dataArray['contentMediaType'] = $data->contentMediaType ?? null;
        }
        else {
            $dataArray['contentMediaType'] = null;
        }
        if (array_key_exists('contentSchema', get_object_vars($data)) && null !== ($data->contentSchema ?? null)) {
            $value_36 = $data->contentSchema ?? null;
            if (is_object($data->contentSchema ?? null)) {
                $value_36 = ($data->contentSchema ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->contentSchema ?? null, 'json', $context));
            } elseif (is_bool($data->contentSchema ?? null)) {
                $value_36 = $data->contentSchema ?? null;
            }
            $dataArray['contentSchema'] = $value_36;
        }
        else {
            $dataArray['contentSchema'] = null;
        }
        if (array_key_exists('definitions', get_object_vars($data)) && null !== ($data->definitions ?? null)) {
            $values_16 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->definitions ?? null as $key_6 => $value_37) {
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
        if (array_key_exists('dependencies', get_object_vars($data)) && null !== ($data->dependencies ?? null)) {
            $values_17 = new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject();
            foreach ($data->dependencies ?? null as $key_7 => $value_39) {
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
        if (array_key_exists('dollarRecursiveAnchor', get_object_vars($data)) && null !== ($data->dollarRecursiveAnchor ?? null)) {
            $dataArray['$recursiveAnchor'] = $data->dollarRecursiveAnchor ?? null;
        }
        else {
            $dataArray['$recursiveAnchor'] = null;
        }
        if (array_key_exists('dollarRecursiveRef', get_object_vars($data)) && null !== ($data->dollarRecursiveRef ?? null)) {
            $dataArray['$recursiveRef'] = $data->dollarRecursiveRef ?? null;
        }
        else {
            $dataArray['$recursiveRef'] = null;
        }
        if (array_key_exists('additionalItems', get_object_vars($data)) && null !== ($data->additionalItems ?? null)) {
            $value_42 = $data->additionalItems ?? null;
            if (is_object($data->additionalItems ?? null)) {
                $value_42 = ($data->additionalItems ?? null) === null ? null : new \Jane\Component\JsonSchema\JsonSchema\Runtime\JsonObject($this->normalizer->normalize($data->additionalItems ?? null, 'json', $context));
            } elseif (is_bool($data->additionalItems ?? null)) {
                $value_42 = $data->additionalItems ?? null;
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