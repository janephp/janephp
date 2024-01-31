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
    class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additionalInfo', $data)) {
                $values = [];
                foreach ($data['additionalInfo'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem', 'json', $context);
                }
                $object->setAdditionalInfo($values);
                unset($data['additionalInfo']);
            }
            if (\array_key_exists('addresses', $data)) {
                $values_1 = [];
                foreach ($data['addresses'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem', 'json', $context);
                }
                $object->setAddresses($values_1);
                unset($data['addresses']);
            }
            if (\array_key_exists('akAs', $data)) {
                $values_2 = [];
                foreach ($data['akAs'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem', 'json', $context);
                }
                $object->setAkAs($values_2);
                unset($data['akAs']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }
            if (\array_key_exists('dateListed', $data)) {
                $object->setDateListed($data['dateListed']);
                unset($data['dateListed']);
            }
            if (\array_key_exists('entityType', $data)) {
                $object->setEntityType($data['entityType']);
                unset($data['entityType']);
            }
            if (\array_key_exists('iDs', $data)) {
                $values_3 = [];
                foreach ($data['iDs'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem', 'json', $context);
                }
                $object->setIDs($values_3);
                unset($data['iDs']);
            }
            if (\array_key_exists('listReferenceNumber', $data)) {
                $object->setListReferenceNumber($data['listReferenceNumber']);
                unset($data['listReferenceNumber']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName', 'json', $context));
                unset($data['name']);
            }
            if (\array_key_exists('reasonListed', $data)) {
                $object->setReasonListed($data['reasonListed']);
                unset($data['reasonListed']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('additionalInfo') && null !== $object->getAdditionalInfo()) {
                $values = [];
                foreach ($object->getAdditionalInfo() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additionalInfo'] = $values;
            }
            if ($object->isInitialized('addresses') && null !== $object->getAddresses()) {
                $values_1 = [];
                foreach ($object->getAddresses() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['addresses'] = $values_1;
            }
            if ($object->isInitialized('akAs') && null !== $object->getAkAs()) {
                $values_2 = [];
                foreach ($object->getAkAs() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['akAs'] = $values_2;
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('dateListed') && null !== $object->getDateListed()) {
                $data['dateListed'] = $object->getDateListed();
            }
            if ($object->isInitialized('entityType') && null !== $object->getEntityType()) {
                $data['entityType'] = $object->getEntityType();
            }
            if ($object->isInitialized('iDs') && null !== $object->getIDs()) {
                $values_3 = [];
                foreach ($object->getIDs() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['iDs'] = $values_3;
            }
            if ($object->isInitialized('listReferenceNumber') && null !== $object->getListReferenceNumber()) {
                $data['listReferenceNumber'] = $object->getListReferenceNumber();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('reasonListed') && null !== $object->getReasonListed()) {
                $data['reasonListed'] = $object->getReasonListed();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails' => false];
        }
    }
} else {
    class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails';
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
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additionalInfo', $data)) {
                $values = [];
                foreach ($data['additionalInfo'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem', 'json', $context);
                }
                $object->setAdditionalInfo($values);
                unset($data['additionalInfo']);
            }
            if (\array_key_exists('addresses', $data)) {
                $values_1 = [];
                foreach ($data['addresses'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem', 'json', $context);
                }
                $object->setAddresses($values_1);
                unset($data['addresses']);
            }
            if (\array_key_exists('akAs', $data)) {
                $values_2 = [];
                foreach ($data['akAs'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem', 'json', $context);
                }
                $object->setAkAs($values_2);
                unset($data['akAs']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }
            if (\array_key_exists('dateListed', $data)) {
                $object->setDateListed($data['dateListed']);
                unset($data['dateListed']);
            }
            if (\array_key_exists('entityType', $data)) {
                $object->setEntityType($data['entityType']);
                unset($data['entityType']);
            }
            if (\array_key_exists('iDs', $data)) {
                $values_3 = [];
                foreach ($data['iDs'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem', 'json', $context);
                }
                $object->setIDs($values_3);
                unset($data['iDs']);
            }
            if (\array_key_exists('listReferenceNumber', $data)) {
                $object->setListReferenceNumber($data['listReferenceNumber']);
                unset($data['listReferenceNumber']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName', 'json', $context));
                unset($data['name']);
            }
            if (\array_key_exists('reasonListed', $data)) {
                $object->setReasonListed($data['reasonListed']);
                unset($data['reasonListed']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('additionalInfo') && null !== $object->getAdditionalInfo()) {
                $values = [];
                foreach ($object->getAdditionalInfo() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additionalInfo'] = $values;
            }
            if ($object->isInitialized('addresses') && null !== $object->getAddresses()) {
                $values_1 = [];
                foreach ($object->getAddresses() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['addresses'] = $values_1;
            }
            if ($object->isInitialized('akAs') && null !== $object->getAkAs()) {
                $values_2 = [];
                foreach ($object->getAkAs() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['akAs'] = $values_2;
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('dateListed') && null !== $object->getDateListed()) {
                $data['dateListed'] = $object->getDateListed();
            }
            if ($object->isInitialized('entityType') && null !== $object->getEntityType()) {
                $data['entityType'] = $object->getEntityType();
            }
            if ($object->isInitialized('iDs') && null !== $object->getIDs()) {
                $values_3 = [];
                foreach ($object->getIDs() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['iDs'] = $values_3;
            }
            if ($object->isInitialized('listReferenceNumber') && null !== $object->getListReferenceNumber()) {
                $data['listReferenceNumber'] = $object->getListReferenceNumber();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('reasonListed') && null !== $object->getReasonListed()) {
                $data['reasonListed'] = $object->getReasonListed();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails' => false];
        }
    }
}