<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BusinessRuleConfigurableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleConfigurable';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleConfigurable';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleConfigurable();
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
                $object->setTriggerPoint($data['triggerPoint']);
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
                $object->setNames($data['names']);
                unset($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
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
                $object->setCondition($data['condition']);
                unset($data['condition']);
            }
            elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
                $object->setCondition(null);
            }
            if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
                $values = [];
                foreach ($data['transformationGroups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup', 'json', $context);
                }
                $object->setTransformationGroups($values);
                unset($data['transformationGroups']);
            }
            elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
                $object->setTransformationGroups(null);
            }
            if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
                $values_1 = [];
                foreach ($data['actions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleAction', 'json', $context);
                }
                $object->setActions($values_1);
                unset($data['actions']);
            }
            elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
                $object->setActions(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('triggerPoint') && null !== $object->getTriggerPoint()) {
                $data['triggerPoint'] = $object->getTriggerPoint();
            }
            $data['isEnabled'] = $object->getIsEnabled();
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['enableTracing'] = $object->getEnableTracing();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('condition') && null !== $object->getCondition()) {
                $data['condition'] = $object->getCondition();
            }
            if ($object->isInitialized('transformationGroups') && null !== $object->getTransformationGroups()) {
                $values = [];
                foreach ($object->getTransformationGroups() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['transformationGroups'] = $values;
            }
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values_1 = [];
                foreach ($object->getActions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['actions'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleConfigurable' => false];
        }
    }
} else {
    class BusinessRuleConfigurableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleConfigurable';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleConfigurable';
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
            $object = new \PicturePark\API\Model\BusinessRuleConfigurable();
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
                $object->setTriggerPoint($data['triggerPoint']);
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
                $object->setNames($data['names']);
                unset($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
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
                $object->setCondition($data['condition']);
                unset($data['condition']);
            }
            elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
                $object->setCondition(null);
            }
            if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
                $values = [];
                foreach ($data['transformationGroups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup', 'json', $context);
                }
                $object->setTransformationGroups($values);
                unset($data['transformationGroups']);
            }
            elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
                $object->setTransformationGroups(null);
            }
            if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
                $values_1 = [];
                foreach ($data['actions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleAction', 'json', $context);
                }
                $object->setActions($values_1);
                unset($data['actions']);
            }
            elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
                $object->setActions(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('triggerPoint') && null !== $object->getTriggerPoint()) {
                $data['triggerPoint'] = $object->getTriggerPoint();
            }
            $data['isEnabled'] = $object->getIsEnabled();
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['enableTracing'] = $object->getEnableTracing();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('condition') && null !== $object->getCondition()) {
                $data['condition'] = $object->getCondition();
            }
            if ($object->isInitialized('transformationGroups') && null !== $object->getTransformationGroups()) {
                $values = [];
                foreach ($object->getTransformationGroups() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['transformationGroups'] = $values;
            }
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values_1 = [];
                foreach ($object->getActions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['actions'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleConfigurable' => false];
        }
    }
}