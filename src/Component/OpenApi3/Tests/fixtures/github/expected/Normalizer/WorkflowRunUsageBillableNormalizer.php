<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class WorkflowRunUsageBillableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\WorkflowRunUsageBillable';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\WorkflowRunUsageBillable';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\WorkflowRunUsageBillable();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\WorkflowRunUsageBillableConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('UBUNTU', $data)) {
                $object->setUBUNTU($this->denormalizer->denormalize($data['UBUNTU'], 'Github\\Model\\WorkflowRunUsageBillableUBUNTU', 'json', $context));
                unset($data['UBUNTU']);
            }
            if (\array_key_exists('MACOS', $data)) {
                $object->setMACOS($this->denormalizer->denormalize($data['MACOS'], 'Github\\Model\\WorkflowRunUsageBillableMACOS', 'json', $context));
                unset($data['MACOS']);
            }
            if (\array_key_exists('WINDOWS', $data)) {
                $object->setWINDOWS($this->denormalizer->denormalize($data['WINDOWS'], 'Github\\Model\\WorkflowRunUsageBillableWINDOWS', 'json', $context));
                unset($data['WINDOWS']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('uBUNTU') && null !== $object->getUBUNTU()) {
                $data['UBUNTU'] = $this->normalizer->normalize($object->getUBUNTU(), 'json', $context);
            }
            if ($object->isInitialized('mACOS') && null !== $object->getMACOS()) {
                $data['MACOS'] = $this->normalizer->normalize($object->getMACOS(), 'json', $context);
            }
            if ($object->isInitialized('wINDOWS') && null !== $object->getWINDOWS()) {
                $data['WINDOWS'] = $this->normalizer->normalize($object->getWINDOWS(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\WorkflowRunUsageBillableConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\WorkflowRunUsageBillable' => false];
        }
    }
} else {
    class WorkflowRunUsageBillableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\WorkflowRunUsageBillable';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\WorkflowRunUsageBillable';
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
            $object = new \Github\Model\WorkflowRunUsageBillable();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\WorkflowRunUsageBillableConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('UBUNTU', $data)) {
                $object->setUBUNTU($this->denormalizer->denormalize($data['UBUNTU'], 'Github\\Model\\WorkflowRunUsageBillableUBUNTU', 'json', $context));
                unset($data['UBUNTU']);
            }
            if (\array_key_exists('MACOS', $data)) {
                $object->setMACOS($this->denormalizer->denormalize($data['MACOS'], 'Github\\Model\\WorkflowRunUsageBillableMACOS', 'json', $context));
                unset($data['MACOS']);
            }
            if (\array_key_exists('WINDOWS', $data)) {
                $object->setWINDOWS($this->denormalizer->denormalize($data['WINDOWS'], 'Github\\Model\\WorkflowRunUsageBillableWINDOWS', 'json', $context));
                unset($data['WINDOWS']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('uBUNTU') && null !== $object->getUBUNTU()) {
                $data['UBUNTU'] = $this->normalizer->normalize($object->getUBUNTU(), 'json', $context);
            }
            if ($object->isInitialized('mACOS') && null !== $object->getMACOS()) {
                $data['MACOS'] = $this->normalizer->normalize($object->getMACOS(), 'json', $context);
            }
            if ($object->isInitialized('wINDOWS') && null !== $object->getWINDOWS()) {
                $data['WINDOWS'] = $this->normalizer->normalize($object->getWINDOWS(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\WorkflowRunUsageBillableConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\WorkflowRunUsageBillable' => false];
        }
    }
}