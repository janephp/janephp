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
    class ListFreshInvestigationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\ListFreshInvestigationResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalCount', $data)) {
                $object->setTotalCount($data['totalCount']);
                unset($data['totalCount']);
            }
            if (\array_key_exists('orders', $data)) {
                $values = [];
                foreach ($data['orders'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItem', 'json', $context);
                }
                $object->setOrders($values);
                unset($data['orders']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('totalCount') && null !== $object->getTotalCount()) {
                $data['totalCount'] = $object->getTotalCount();
            }
            if ($object->isInitialized('orders') && null !== $object->getOrders()) {
                $values = [];
                foreach ($object->getOrders() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['orders'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\ListFreshInvestigationResponse' => false];
        }
    }
} else {
    class ListFreshInvestigationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponse';
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
            $object = new \CreditSafe\API\Model\ListFreshInvestigationResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalCount', $data)) {
                $object->setTotalCount($data['totalCount']);
                unset($data['totalCount']);
            }
            if (\array_key_exists('orders', $data)) {
                $values = [];
                foreach ($data['orders'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItem', 'json', $context);
                }
                $object->setOrders($values);
                unset($data['orders']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('totalCount') && null !== $object->getTotalCount()) {
                $data['totalCount'] = $object->getTotalCount();
            }
            if ($object->isInitialized('orders') && null !== $object->getOrders()) {
                $values = [];
                foreach ($object->getOrders() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['orders'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\ListFreshInvestigationResponse' => false];
        }
    }
}