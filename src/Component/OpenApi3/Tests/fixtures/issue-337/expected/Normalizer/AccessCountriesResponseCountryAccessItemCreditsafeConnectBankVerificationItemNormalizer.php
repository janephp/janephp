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
    class AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate($data['startDate']);
                unset($data['startDate']);
            }
            if (\array_key_exists('expireDate', $data)) {
                $object->setExpireDate($data['expireDate']);
                unset($data['expireDate']);
            }
            if (\array_key_exists('paid', $data)) {
                $object->setPaid($data['paid']);
                unset($data['paid']);
            }
            if (\array_key_exists('used', $data)) {
                $object->setUsed($data['used']);
                unset($data['used']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate();
            }
            if ($object->isInitialized('expireDate') && null !== $object->getExpireDate()) {
                $data['expireDate'] = $object->getExpireDate();
            }
            if ($object->isInitialized('paid') && null !== $object->getPaid()) {
                $data['paid'] = $object->getPaid();
            }
            if ($object->isInitialized('used') && null !== $object->getUsed()) {
                $data['used'] = $object->getUsed();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem' => false];
        }
    }
} else {
    class AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem';
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
            $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate($data['startDate']);
                unset($data['startDate']);
            }
            if (\array_key_exists('expireDate', $data)) {
                $object->setExpireDate($data['expireDate']);
                unset($data['expireDate']);
            }
            if (\array_key_exists('paid', $data)) {
                $object->setPaid($data['paid']);
                unset($data['paid']);
            }
            if (\array_key_exists('used', $data)) {
                $object->setUsed($data['used']);
                unset($data['used']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate();
            }
            if ($object->isInitialized('expireDate') && null !== $object->getExpireDate()) {
                $data['expireDate'] = $object->getExpireDate();
            }
            if ($object->isInitialized('paid') && null !== $object->getPaid()) {
                $data['paid'] = $object->getPaid();
            }
            if ($object->isInitialized('used') && null !== $object->getUsed()) {
                $data['used'] = $object->getUsed();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem' => false];
        }
    }
}