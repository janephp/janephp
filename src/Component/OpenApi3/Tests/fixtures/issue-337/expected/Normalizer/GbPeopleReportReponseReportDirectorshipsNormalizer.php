<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbPeopleReportReponseReportDirectorshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('current', $data)) {
                $values = [];
                foreach ($data['current'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItem', 'json', $context);
                }
                $object->setCurrent($values);
                unset($data['current']);
            }
            if (\array_key_exists('inactive', $data)) {
                $values_1 = [];
                foreach ($data['inactive'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItem', 'json', $context);
                }
                $object->setInactive($values_1);
                unset($data['inactive']);
            }
            if (\array_key_exists('previous', $data)) {
                $values_2 = [];
                foreach ($data['previous'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItem', 'json', $context);
                }
                $object->setPrevious($values_2);
                unset($data['previous']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('current') && null !== $object->getCurrent()) {
                $values = [];
                foreach ($object->getCurrent() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['current'] = $values;
            }
            if ($object->isInitialized('inactive') && null !== $object->getInactive()) {
                $values_1 = [];
                foreach ($object->getInactive() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['inactive'] = $values_1;
            }
            if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
                $values_2 = [];
                foreach ($object->getPrevious() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['previous'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships' => false];
        }
    }
} else {
    class GbPeopleReportReponseReportDirectorshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships';
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
            $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('current', $data)) {
                $values = [];
                foreach ($data['current'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItem', 'json', $context);
                }
                $object->setCurrent($values);
                unset($data['current']);
            }
            if (\array_key_exists('inactive', $data)) {
                $values_1 = [];
                foreach ($data['inactive'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItem', 'json', $context);
                }
                $object->setInactive($values_1);
                unset($data['inactive']);
            }
            if (\array_key_exists('previous', $data)) {
                $values_2 = [];
                foreach ($data['previous'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItem', 'json', $context);
                }
                $object->setPrevious($values_2);
                unset($data['previous']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('current') && null !== $object->getCurrent()) {
                $values = [];
                foreach ($object->getCurrent() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['current'] = $values;
            }
            if ($object->isInitialized('inactive') && null !== $object->getInactive()) {
                $values_1 = [];
                foreach ($object->getInactive() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['inactive'] = $values_1;
            }
            if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
                $values_2 = [];
                foreach ($object->getPrevious() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['previous'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships' => false];
        }
    }
}