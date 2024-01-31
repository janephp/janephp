<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
            }
            if (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] !== null) {
                $value = $data['dateOrNull'];
                if (is_string($data['dateOrNull']) and false !== \DateTime::createFromFormat('Y-m-d', $data['dateOrNull'])->setTime(0, 0, 0)) {
                    $value = \DateTime::createFromFormat('Y-m-d', $data['dateOrNull'])->setTime(0, 0, 0);
                } elseif (is_null($data['dateOrNull'])) {
                    $value = $data['dateOrNull'];
                }
                $object->setDateOrNull($value);
            }
            elseif (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] === null) {
                $object->setDateOrNull(null);
            }
            if (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] !== null) {
                $value_1 = $data['dateOrNullOrInt'];
                if (is_string($data['dateOrNullOrInt']) and false !== \DateTime::createFromFormat('Y-m-d', $data['dateOrNullOrInt'])->setTime(0, 0, 0)) {
                    $value_1 = \DateTime::createFromFormat('Y-m-d', $data['dateOrNullOrInt'])->setTime(0, 0, 0);
                } elseif (is_null($data['dateOrNullOrInt'])) {
                    $value_1 = $data['dateOrNullOrInt'];
                } elseif (is_int($data['dateOrNullOrInt'])) {
                    $value_1 = $data['dateOrNullOrInt'];
                }
                $object->setDateOrNullOrInt($value_1);
            }
            elseif (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] === null) {
                $object->setDateOrNullOrInt(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate()->format('Y-m-d');
            }
            if ($object->isInitialized('dateOrNull') && null !== $object->getDateOrNull()) {
                $value = $object->getDateOrNull();
                if (is_object($object->getDateOrNull())) {
                    $value = $object->getDateOrNull()->format('Y-m-d');
                } elseif (is_null($object->getDateOrNull())) {
                    $value = $object->getDateOrNull();
                }
                $data['dateOrNull'] = $value;
            }
            if ($object->isInitialized('dateOrNullOrInt') && null !== $object->getDateOrNullOrInt()) {
                $value_1 = $object->getDateOrNullOrInt();
                if (is_object($object->getDateOrNullOrInt())) {
                    $value_1 = $object->getDateOrNullOrInt()->format('Y-m-d');
                } elseif (is_null($object->getDateOrNullOrInt())) {
                    $value_1 = $object->getDateOrNullOrInt();
                } elseif (is_int($object->getDateOrNullOrInt())) {
                    $value_1 = $object->getDateOrNullOrInt();
                }
                $data['dateOrNullOrInt'] = $value_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test' => false];
        }
    }
} else {
    class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test';
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
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
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
            }
            if (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] !== null) {
                $value = $data['dateOrNull'];
                if (is_string($data['dateOrNull']) and false !== \DateTime::createFromFormat('Y-m-d', $data['dateOrNull'])->setTime(0, 0, 0)) {
                    $value = \DateTime::createFromFormat('Y-m-d', $data['dateOrNull'])->setTime(0, 0, 0);
                } elseif (is_null($data['dateOrNull'])) {
                    $value = $data['dateOrNull'];
                }
                $object->setDateOrNull($value);
            }
            elseif (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] === null) {
                $object->setDateOrNull(null);
            }
            if (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] !== null) {
                $value_1 = $data['dateOrNullOrInt'];
                if (is_string($data['dateOrNullOrInt']) and false !== \DateTime::createFromFormat('Y-m-d', $data['dateOrNullOrInt'])->setTime(0, 0, 0)) {
                    $value_1 = \DateTime::createFromFormat('Y-m-d', $data['dateOrNullOrInt'])->setTime(0, 0, 0);
                } elseif (is_null($data['dateOrNullOrInt'])) {
                    $value_1 = $data['dateOrNullOrInt'];
                } elseif (is_int($data['dateOrNullOrInt'])) {
                    $value_1 = $data['dateOrNullOrInt'];
                }
                $object->setDateOrNullOrInt($value_1);
            }
            elseif (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] === null) {
                $object->setDateOrNullOrInt(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate()->format('Y-m-d');
            }
            if ($object->isInitialized('dateOrNull') && null !== $object->getDateOrNull()) {
                $value = $object->getDateOrNull();
                if (is_object($object->getDateOrNull())) {
                    $value = $object->getDateOrNull()->format('Y-m-d');
                } elseif (is_null($object->getDateOrNull())) {
                    $value = $object->getDateOrNull();
                }
                $data['dateOrNull'] = $value;
            }
            if ($object->isInitialized('dateOrNullOrInt') && null !== $object->getDateOrNullOrInt()) {
                $value_1 = $object->getDateOrNullOrInt();
                if (is_object($object->getDateOrNullOrInt())) {
                    $value_1 = $object->getDateOrNullOrInt()->format('Y-m-d');
                } elseif (is_null($object->getDateOrNullOrInt())) {
                    $value_1 = $object->getDateOrNullOrInt();
                } elseif (is_int($object->getDateOrNullOrInt())) {
                    $value_1 = $object->getDateOrNullOrInt();
                }
                $data['dateOrNullOrInt'] = $value_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test' => false];
        }
    }
}