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
    class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('street1', $data)) {
                $object->setStreet1($data['street1']);
                unset($data['street1']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('street1') && null !== $object->getStreet1()) {
                $data['street1'] = $object->getStreet1();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem' => false];
        }
    }
} else {
    class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem';
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
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('street1', $data)) {
                $object->setStreet1($data['street1']);
                unset($data['street1']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('street1') && null !== $object->getStreet1()) {
                $data['street1'] = $object->getStreet1();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem' => false];
        }
    }
}