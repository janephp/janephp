<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\HealthcheckResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\HealthcheckResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\HealthcheckResult();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\HealthcheckResultConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Start', $data)) {
                $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['Start']));
            }
            if (\array_key_exists('End', $data)) {
                $object->setEnd($data['End']);
            }
            if (\array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
            }
            if (\array_key_exists('Output', $data)) {
                $object->setOutput($data['Output']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('start') && null !== $object->getStart()) {
                $data['Start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('end') && null !== $object->getEnd()) {
                $data['End'] = $object->getEnd();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('output') && null !== $object->getOutput()) {
                $data['Output'] = $object->getOutput();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\HealthcheckResultConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\HealthcheckResult' => false];
        }
    }
} else {
    class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\HealthcheckResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\HealthcheckResult';
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
            $object = new \Docker\Api\Model\HealthcheckResult();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\HealthcheckResultConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Start', $data)) {
                $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['Start']));
            }
            if (\array_key_exists('End', $data)) {
                $object->setEnd($data['End']);
            }
            if (\array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
            }
            if (\array_key_exists('Output', $data)) {
                $object->setOutput($data['Output']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('start') && null !== $object->getStart()) {
                $data['Start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('end') && null !== $object->getEnd()) {
                $data['End'] = $object->getEnd();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('output') && null !== $object->getOutput()) {
                $data['Output'] = $object->getOutput();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\HealthcheckResultConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\HealthcheckResult' => false];
        }
    }
}