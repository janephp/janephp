<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleConfigurableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleConfigurable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleConfigurable::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleConfigurable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isEnabled', $data) && \is_int($data['isEnabled'])) {
            $data['isEnabled'] = (bool) $data['isEnabled'];
        }
        if (\array_key_exists('enableTracing', $data) && \is_int($data['enableTracing'])) {
            $data['enableTracing'] = (bool) $data['enableTracing'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] !== null) {
            $value = $data['triggerPoint'];
            if (is_array($data['triggerPoint']) and \array_key_exists('executionScope', $data['triggerPoint']) and \array_key_exists('documentType', $data['triggerPoint']) and \array_key_exists('action', $data['triggerPoint'])) {
                $value = $this->denormalizer->denormalize($data['triggerPoint'], \PicturePark\API\Model\BusinessRuleTriggerPoint::class, 'json', $context);
            }
            $object->triggerPoint = $value;
            unset($data['triggerPoint']);
        }
        elseif (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] === null) {
            $object->triggerPoint = null;
            unset($data['triggerPoint']);
        }
        if (\array_key_exists('isEnabled', $data)) {
            $object->isEnabled = $data['isEnabled'];
            unset($data['isEnabled']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $value_1 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $object->names = $value_1;
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
            unset($data['names']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $value_3 = $data['description'];
            if (is_array($data['description']) && $this->isOnlyNumericKeys($data['description'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['description'] as $key_1 => $value_4) {
                    $values_1[$key_1] = $value_4;
                }
                $value_3 = $values_1;
            }
            $object->description = $value_3;
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->description = null;
            unset($data['description']);
        }
        if (\array_key_exists('enableTracing', $data)) {
            $object->enableTracing = $data['enableTracing'];
            unset($data['enableTracing']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('condition', $data) && $data['condition'] !== null) {
            $value_5 = $data['condition'];
            if (is_array($data['condition']) and \array_key_exists('kind', $data['condition'])) {
                $value_5 = $this->denormalizer->denormalize($data['condition'], \PicturePark\API\Model\BusinessRuleCondition::class, 'json', $context);
            }
            $object->condition = $value_5;
            unset($data['condition']);
        }
        elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
            $object->condition = null;
            unset($data['condition']);
        }
        if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
            $values_2 = [];
            foreach ($data['transformationGroups'] as $value_6) {
                $values_2[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\BusinessRuleTransformationGroup::class, 'json', $context);
            }
            $object->transformationGroups = $values_2;
            unset($data['transformationGroups']);
        }
        elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
            $object->transformationGroups = null;
            unset($data['transformationGroups']);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_3 = [];
            foreach ($data['actions'] as $value_7) {
                $values_3[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\BusinessRuleAction::class, 'json', $context);
            }
            $object->actions = $values_3;
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->actions = null;
            unset($data['actions']);
        }
        foreach ($data as $key_2 => $value_8) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('triggerPoint', get_object_vars($data)) && null !== ($data->triggerPoint ?? null)) {
            $value = $data->triggerPoint ?? null;
            if (is_object($data->triggerPoint ?? null)) {
                $value = ($data->triggerPoint ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->triggerPoint ?? null, 'json', $context));
            }
            $dataArray['triggerPoint'] = $value;
        }
        $dataArray['isEnabled'] = $data->isEnabled ?? null;
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value_1 = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $dataArray['names'] = $value_1;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $value_3 = $data->description ?? null;
            if (is_object($data->description ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->description ?? null as $key_1 => $value_4) {
                    $values_1[$key_1] = $value_4;
                }
                $value_3 = $values_1;
            }
            $dataArray['description'] = $value_3;
        }
        $dataArray['enableTracing'] = $data->enableTracing ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('condition', get_object_vars($data)) && null !== ($data->condition ?? null)) {
            $value_5 = $data->condition ?? null;
            if (is_object($data->condition ?? null)) {
                $value_5 = ($data->condition ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->condition ?? null, 'json', $context));
            }
            $dataArray['condition'] = $value_5;
        }
        if (array_key_exists('transformationGroups', get_object_vars($data)) && null !== ($data->transformationGroups ?? null)) {
            $values_2 = [];
            foreach ($data->transformationGroups ?? null as $value_6) {
                $values_2[] = $value_6 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['transformationGroups'] = $values_2;
        }
        if (array_key_exists('actions', get_object_vars($data)) && null !== ($data->actions ?? null)) {
            $values_3 = [];
            foreach ($data->actions ?? null as $value_7) {
                $values_3[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['actions'] = $values_3;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_8) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleConfigurable::class => false];
    }
}