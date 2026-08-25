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
class BusinessRuleScriptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleScript::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleScript::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleScript();
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
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] !== null) {
            $value = $data['triggerPoint'];
            if (is_array($data['triggerPoint']) and \array_key_exists('executionScope', $data['triggerPoint']) and \array_key_exists('documentType', $data['triggerPoint']) and \array_key_exists('action', $data['triggerPoint'])) {
                $value = $this->denormalizer->denormalize($data['triggerPoint'], \PicturePark\API\Model\BusinessRuleTriggerPoint::class, 'json', $context);
            }
            $object->setTriggerPoint($value);
            unset($data['triggerPoint']);
        }
        elseif (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] === null) {
            $object->setTriggerPoint(null);
            unset($data['triggerPoint']);
        }
        if (\array_key_exists('isEnabled', $data)) {
            $object->setIsEnabled($data['isEnabled']);
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
            $object->setNames($value_1);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
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
            $object->setDescription($value_3);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('enableTracing', $data)) {
            $object->setEnableTracing($data['enableTracing']);
            unset($data['enableTracing']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('script', $data) && $data['script'] !== null) {
            $object->setScript($data['script']);
            unset($data['script']);
        }
        elseif (\array_key_exists('script', $data) && $data['script'] === null) {
            $object->setScript(null);
            unset($data['script']);
        }
        foreach ($data as $key_2 => $value_5) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('triggerPoint') && null !== $data->getTriggerPoint()) {
            $value = $data->getTriggerPoint();
            if (is_object($data->getTriggerPoint())) {
                $value = $data->getTriggerPoint() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getTriggerPoint(), 'json', $context));
            }
            $dataArray['triggerPoint'] = $value;
        }
        $dataArray['isEnabled'] = $data->getIsEnabled();
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $value_1 = $data->getNames();
            if (is_object($data->getNames())) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getNames() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $dataArray['names'] = $value_1;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $value_3 = $data->getDescription();
            if (is_object($data->getDescription())) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDescription() as $key_1 => $value_4) {
                    $values_1[$key_1] = $value_4;
                }
                $value_3 = $values_1;
            }
            $dataArray['description'] = $value_3;
        }
        $dataArray['enableTracing'] = $data->getEnableTracing();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('script') && null !== $data->getScript()) {
            $dataArray['script'] = $data->getScript();
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_5) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleScript::class => false];
    }
}