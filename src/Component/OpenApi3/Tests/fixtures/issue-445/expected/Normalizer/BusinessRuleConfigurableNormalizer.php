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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleConfigurable();
        if (\array_key_exists('isEnabled', $data) && \is_int($data['isEnabled'])) {
            $data['isEnabled'] = (bool) $data['isEnabled'];
        }
        if (\array_key_exists('enableTracing', $data) && \is_int($data['enableTracing'])) {
            $data['enableTracing'] = (bool) $data['enableTracing'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] !== null) {
            $value = $data['triggerPoint'];
            if (is_array($data['triggerPoint']) and isset($data['triggerPoint']['executionScope']) and isset($data['triggerPoint']['documentType']) and isset($data['triggerPoint']['action'])) {
                $value = $this->denormalizer->denormalize($data['triggerPoint'], \PicturePark\API\Model\BusinessRuleTriggerPoint::class, 'json', $context);
            }
            $object->setTriggerPoint($value);
            unset($data['triggerPoint']);
        }
        elseif (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] === null) {
            $object->setTriggerPoint(null);
        }
        if (\array_key_exists('isEnabled', $data)) {
            $object->setIsEnabled($data['isEnabled']);
            unset($data['isEnabled']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $value_1 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['names'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $object->setNames($value_1);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $value_3 = $data['description'];
            if (is_array($data['description']) && $this->isOnlyNumericKeys($data['description'])) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['description'] as $key_1 => $value_4) {
                    $values_1[$key_1] = $value_4;
                }
                $value_3 = $values_1;
            }
            $object->setDescription($value_3);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enableTracing', $data)) {
            $object->setEnableTracing($data['enableTracing']);
            unset($data['enableTracing']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('condition', $data) && $data['condition'] !== null) {
            $value_5 = $data['condition'];
            if (is_array($data['condition']) and isset($data['condition']['kind'])) {
                $value_5 = $this->denormalizer->denormalize($data['condition'], \PicturePark\API\Model\BusinessRuleCondition::class, 'json', $context);
            }
            $object->setCondition($value_5);
            unset($data['condition']);
        }
        elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
            $object->setCondition(null);
        }
        if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
            $values_2 = [];
            foreach ($data['transformationGroups'] as $value_6) {
                $values_2[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\BusinessRuleTransformationGroup::class, 'json', $context);
            }
            $object->setTransformationGroups($values_2);
            unset($data['transformationGroups']);
        }
        elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
            $object->setTransformationGroups(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_3 = [];
            foreach ($data['actions'] as $value_7) {
                $values_3[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\BusinessRuleAction::class, 'json', $context);
            }
            $object->setActions($values_3);
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
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
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('triggerPoint')) {
            $value = $data->getTriggerPoint();
            if (is_object($data->getTriggerPoint())) {
                $value = $this->normalizer->normalize($data->getTriggerPoint(), 'json', $context);
            }
            $dataArray['triggerPoint'] = $value;
        }
        $dataArray['isEnabled'] = $data->getIsEnabled();
        if ($data->isInitialized('names')) {
            $value_1 = $data->getNames();
            if (is_object($data->getNames())) {
                $values = [];
                foreach ($data->getNames() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $dataArray['names'] = $value_1;
        }
        if ($data->isInitialized('description')) {
            $value_3 = $data->getDescription();
            if (is_object($data->getDescription())) {
                $values_1 = [];
                foreach ($data->getDescription() as $key_1 => $value_4) {
                    $values_1[$key_1] = $value_4;
                }
                $value_3 = $values_1;
            }
            $dataArray['description'] = $value_3;
        }
        $dataArray['enableTracing'] = $data->getEnableTracing();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('condition')) {
            $value_5 = $data->getCondition();
            if (is_object($data->getCondition())) {
                $value_5 = $this->normalizer->normalize($data->getCondition(), 'json', $context);
            }
            $dataArray['condition'] = $value_5;
        }
        if ($data->isInitialized('transformationGroups')) {
            $values_2 = [];
            foreach ($data->getTransformationGroups() as $value_6) {
                $values_2[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['transformationGroups'] = $values_2;
        }
        if ($data->isInitialized('actions')) {
            $values_3 = [];
            foreach ($data->getActions() as $value_7) {
                $values_3[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['actions'] = $values_3;
        }
        foreach ($data as $key_2 => $value_8) {
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